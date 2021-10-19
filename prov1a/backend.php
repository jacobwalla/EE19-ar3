<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <?php

        /* Ta emot data som skickas */
        $namn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING);
        $brutto = filter_input(INPUT_POST, "brutto", FILTER_SANITIZE_STRING);
        $skattesats = filter_input(INPUT_POST, "skatt", FILTER_SANITIZE_STRING);

            /* Räkna ut skatt */
            $nettolön = $brutto * (100 - $skattesats) / 100;

            /* Fel meddelande */
            if ($brutto < 10000 || $brutto > 45000) {
                echo "<p class=\"varning\">Bruttolönen måste ligga mellan 10000kr - 45000kr</p>";
            } else {
                if ($skattesats < 10 || $skattesats > 45) {
                    echo "<p class=\"varning\">Skattesatsen måste ligga mellan 10% - 45%</p>";
                } else {
                    /* Skriv ut lönebesked */
                    echo "<h1>Lönebesked</h1>";
                    echo "<p>$namn,s lön är $nettolön kr efter skatt.</p>";
                    echo "<p>Beräkning baserat på bruttolön $brutto kr och skattesatsen $skattesats%</p>";
                }
            }

        ?>
    </div>
</body>

</html>