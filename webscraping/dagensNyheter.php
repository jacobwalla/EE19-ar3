<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dagens horoskop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kontainer">
        <?php
        echo "<h1>Dagens horoskop</h1>";

        // Hämta sidan
        $sidan = file_get_contents("<!-- List Items -->");

        // Sök början på texten
        $start = strpos($sidan, "Datorspelsportalen") ;
        if ($start !== false) {
            echo "<p>Horoskopet började på position $start</p>";
        } else {
            echo "<p>Hittade inte horoskopets början!</p>";
        }

        // Sök slutet på texten
        $slut = strpos($sidan, "mw-headline", $start);
        if ($slut !== false) {
            echo "<p>Horoskopet slutade på position $slut</p>";
        } else {
            echo "<p>Hittade inte horoskopets slut!</p>";
        }
        

        // Plocka ut ungefär delen med horoskoptexten
        $sidansText = substr($sidan, $start, $slut - $start);
        echo $sidansText;

        ?>
    </div>
</body>