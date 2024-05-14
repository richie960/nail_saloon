<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Session</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            width: 100%;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #response {
            margin-top: 20px;
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>

<header>
    <h1>Booking Page</h1>
    <button onclick="location.href='index.php'">Return Home</button>
</header>

<section>
    <!-- Your existing section code here -->
</section>

<!-- Booking Form -->
<div class="container">
    <form id="bookingForm" action="" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" placeholder
        ="0712345456
        "
        required>

        <label for="message">Message:</label>
        <textarea id="message" name="message"  rows="4" placeholder
        ="eg
        hey i wanna book a session of date 12th dec 2026
        "
        required></textarea>

        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Parameters
        $partnerID = '8854';
        $apiKey = '70efa65617bcc559666d74e884c3abb6';
        $shortcode = 'Savvy_sms';

        // Specific phone number to send the message to
        $specificNumber = '+254705182805'; // Replace with the actual number

        // Get user input from the form
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Construct the message to send
        $fullMessage = "Booking request from $name. Phone: $phone. Message: $message";

        // Construct the URL with parameters
        $url = 'https://sms.savvybulksms.com/api/services/sendsms';
        $url .= '?partnerID=' . urlencode($partnerID);
        $url .= '&mobile=' . urlencode($specificNumber); // Use the specific number here
        $url .= '&apikey=' . urlencode($apiKey);
        $url .= '&shortcode=' . urlencode($shortcode);
        $url .= '&message=' . urlencode($fullMessage);

        // Send an HTTP POST request to the URL
        $response = file_get_contents($url);

        // Check if the request was successful
        if ($response !== false) {
            // Output the response message
            echo '<div id="response">Message sent successfully!</div>';
       
if (isset($_POST['submit'])) {
    $partnerID = '8854';
    $apiKey = '70efa65617bcc559666d74e884c3abb6';
    $shortcode = 'Savvy_sms';

    // Get user input from the form
    $phone = $_POST['phone'];

    // Construct the confirmation message
    $confirmationMessage = "Thank you for booking with Jymo dreadlocks! Your appointment has been confirmed. James, CEO of Jymo dreadlocks, will contact you shortly.";

    // Construct the Savvy SMS AI URL for sending SMS
    $savvyAiUrl = 'https://sms.savvybulksms.com/api/services/sendsms';
    $savvyAiUrl .= '?partnerID=' . urlencode($partnerID);
    $savvyAiUrl .= '&mobile=' . urlencode($phone);
    $savvyAiUrl .= '&apikey=' . urlencode($apiKey);
    $savvyAiUrl .= '&shortcode=' . urlencode($shortcode);
    $savvyAiUrl .= '&message=' . urlencode($confirmationMessage);

    // Send an HTTP POST request to Savvy SMS AI for confirmation message
    $savvyAiResponse = file_get_contents($savvyAiUrl);

    // Check if the Savvy SMS AI request was successful
    if ($savvyAiResponse !== false) {
        // Output the response message for Savvy SMS AI
        echo '<div id="response">Confirmation message sent successfully!</div>';
    } else {
        // Failed to send confirmation message via Savvy SMS AI
        echo '<div id="response">Failed to send confirmation message.</div>';
    }
}


        } else {
            // Failed to send message
            echo '<div id="response">Failed to send message.</div>';
        }
    }
    ?>
</div>

<footer>
    <!-- Your existing footer code here -->
</footer>

</body>

</html>


    



