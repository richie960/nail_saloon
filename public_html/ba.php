<H1>
    KENKAPS STATICTICS FOR USER IP OCCURENCES
</H1>
<?php

// Function to read and count occurrences of each unique IP address
function countIPOccurrences() {
    $filename = 'ip_addresses.txt';

    if (file_exists($filename)) {
        $ipAddresses = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Count occurrences of each unique IP
        $ipCounts = array_count_values($ipAddresses);

        // Prepare data for Chart.js
        $labels = [];
        $data = [];

        foreach ($ipCounts as $ip => $count) {
            $labels[] = $ip;
            $data[] = $count;
        }

        // Generate JavaScript to create a bar graph using Chart.js
        echo '<canvas id="ipBarGraph" width="400" height="200"></canvas>';
        echo '<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>';
        echo '<script>
            var ctx = document.getElementById("ipBarGraph").getContext("2d");
            var myChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ' . json_encode($labels) . ',
                    datasets: [{
                        label: "IP Occurrences",
                        data: ' . json_encode($data) . ',
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        borderColor: "rgba(75, 192, 192, 1)",
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>';
    } else {
        echo 'File not found.';
    }
}

// Call the function to count IP occurrences and display the bar graph
countIPOccurrences();

?>
