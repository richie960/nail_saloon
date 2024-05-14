<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Map Example</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <style>
        #mapid {
            height: 400px;
        }
    </style>
</head>

<body>

    <div id="mapid"></div>

    <script>
        var mymap = L.map('mapid').setView([-1.286389, 36.817223], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(mymap);

        L.marker([-1.286389, 36.817223]).addTo(mymap)
            .bindPopup("<b>Nairobi</b>, Kenya<br />Advanced Best Care Location.")
            .openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>

</body>

</html>
