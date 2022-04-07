<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens Väder</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <?php

        // Api-nyckel
        $api = "22ee1d58f7adae08ee71fa7c0bd24481";

        // Stad
        $stad = "Stockholm";

        echo "<h1>Dagens väder i $stad</h1>";

        // Tjänsten
        $url = "https://api.openweathermap.org/data/2.5/weather?q=$stad&appid=$api&units=metric&lang=sv";

        // Anropa apiet
        $json = file_get_contents($url);

        // Avkoda JSON
        $jsonData = json_decode($json);

        // Plocka ut koordinaterna
        $koordinater = $jsonData->coord;
        $lon = $koordinater->lon;
        $lat = $koordinater->lat;

        // Plocka ut vädret
        $vader = $jsonData->weather;
        $himlen = $vader[0]->description;

        // Plocka ut ikonen
        $ikon = $vader[0]->icon;

        // Plocka ut temperaturen i Celsius
        $temp = $jsonData->main->temp;
        
        // Plocka ut vindhastigheten
        $vind = $jsonData->wind->speed;
        
        // Skriv ut allt
        echo "<p>Koordinater (lat, lon): $lat, $lon</p>";
        echo "<p>Himlen är: $himlen</p>";
        echo "<p><img src=\"http://openweathermap.org/img/wn/$ikon@2x.png\"></p>";
        echo "<p>Temperaturen just nu är: $temp&deg; C</p>";
        echo "<p>Vindhastigheten just nu är: $vind m/s</p>";


        ?>
        <footer>
            <img src="https://openweathermap.org/themes/openweathermap/assets/img/openweather-negative-logo-RGB.png" alt="OWM"> Open Weather Map api
        </footer>   
    </div>
</body>

</html>