<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skatteberäkning</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>Lön efter skatt</h1>

        <!-- Formuläret -->
        <form class="kol2" action="prov1a.php" method="POST">
            <!-- Skriv in namn -->
            <label>Namn</label>
            <input type="text" name="anamn" required>
            <!-- Skriv in bruttolön -->
            <label>Bruttolön</label>
            <input type="text" name="brutto" required>
            <!-- Skriv in skattesats -->
            <label>Skattesats</label>
            <input type="text" name="skatt" required>
            <!-- Knapp för att räkna ut -->
            <button>Räkna ut </button>
        </form>

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