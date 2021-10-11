<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Omvandla text</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h3>Omvandla text</h3>
        <?php
        $texten = filter_input(INPUT_POST, 'texten', FILTER_SANITIZE_STRING);
        $bokstäver = filter_input(INPUT_POST, 'bokstäver', FILTER_SANITIZE_STRING);

        echo "<p>Texten med $bokstäver bokstäver blir såhär</p>";

        // Om riktning är c->f 
        if ($bokstäver == "stora") {
            echo strtoupper("<p>$texten</p>");
        } else {
            echo strtolower("<p>$texten</p>");
        }

        ?>
    </div>
</body>
</html>