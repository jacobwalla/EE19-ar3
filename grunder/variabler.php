<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Variabler i PHP</h1>
    <?php
    $förnamn = "Jacob";
    $efternamn = "Hanson";

    //echo $förnamn . " " . $efternamn;
    echo "<p>Mitt namn är $förnamn $efternamn</p>";
    echo "Todays date is" . " " . date("l d F Y");

    echo "<p>";
    setlocale(LC_ALL, "sv_SE.utf8");
    echo "Dagens datum är" . " " . strftime("%A %e %B %Y");
    echo "</p>";
    ?>
</body>
</html>