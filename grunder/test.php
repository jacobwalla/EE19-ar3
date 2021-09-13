<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Testa lite PHP</h1>
    <?php
    echo "<p>Mitt namn är Jacob<br>";
    echo "Jag bor i Sumpan</p>";

    echo "<p>";
    echo date("l d F Y");
    echo "</p>";

    echo "<p>";
    setlocale(LC_ALL, "sv_SE.utf8");
    echo strftime("%A %d %B %Y");
    echo "</p>";
    ?>
</body>
</html>