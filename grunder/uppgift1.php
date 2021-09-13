<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Uppgift 1</h1>
    <?php
    // Två variabler för namn och adress
    $namn = "Jacob Hanson";
    $adress = "Fredsgatan 3";

    // Skriv ut "Mitt namn är ..., jag bor på ...
    echo "<p>Mitt namn är $namn, jag bor på $adress</p>";

    // Variabler för kön och ålder 
    $kön = "man";
    $ålder = 18;

    // Skriv ut "Jag heter ... och jag är ... år.
    echo "<p>Jag är en $kön och jag är $ålder</p>"
    ?>
</body>

</html>