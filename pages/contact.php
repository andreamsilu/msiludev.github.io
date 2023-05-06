<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <style>
        /* Some basic styles for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        h1 {
            margin: 0;
        }
        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input, textarea {
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        input:focus, textarea:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }
        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #444;
        }
        #map {
            height: 400px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <main>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send</button>
        </form>

        <div id="map"></div>

        <script>
            function initMap() {
                // The location of the business
                const businessLocation = { lat: 40.7128, lng: -74.006 };

                // The map, centered at the business location
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
                    center: businessLocation,
                });

                // The marker, positioned at the business location
                const marker = new google.maps.Marker({
                    position: businessLocation,
                    map: map,
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    </main>
</body>
</html>
