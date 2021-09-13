<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $namn = "Jacob Hanson";
    $dateM = date("m")+3;
    $dateD = date("d");
    $dateY = date("Y")+7;

    echo "Jag heter $namn och jag fyller 25 $dateD/$dateM/$dateY";
    ?>
</body>
</html>