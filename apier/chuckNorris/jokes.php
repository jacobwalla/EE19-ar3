<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chuck Norris skämt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Chuck Norris skämt</h1>
        <?php
        // Tjänsten
        $url = "https://api.chucknorris.io/jokes/random";

        // Anropa apiet
        $json = file_get_contents($url);

        // Avkoda JSON
        $jsonData = json_decode($json);

        // Plocka ut skämtet
        $skamtet = $jsonData->value;

        // Plocka ut bilden
        $bilden = $jsonData->icon_url;

        // Skriv ut skämtet
        echo "<blockquote><img src=\"$bilden\" alt=\"Chuck Norris\">
        $skamtet<footer>Chuck Norris</footer></blockquote>";

        ?>
    </div>
</body>
</html>