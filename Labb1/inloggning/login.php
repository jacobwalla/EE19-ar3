<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inloggning</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1 class="display-4">Inloggning</h1>
        </nav>
        <form class="kol2" action="login.php" method="POST">
            <label>Användarnamn</label>
            <input type="text" name="anamn" placeholder="Tex erik12" required>

            <label>Lösenord</label>
            <input type="password" name="lösen" required>

            <button class="primary">Skicka</button>
        </form>
        <?php
        // Ta emot data som skickas
        $anamn = filter_input(INPUT_POST, "anamn", FILTER_SANITIZE_STRING );
        $losen = filter_input(INPUT_POST, "lösen", FILTER_SANITIZE_STRING );

        // Snabbtest
        // echo "$anamn $losen"

        // Kolla om användarnamn och lösenord stämmer
        if ($anamn == "jacobbre" && $losen == "Jacob123") {
            echo "<p class=\"alert alert-success\">Du är inloggad!</p>";
        } else {
            echo "<p class=\"alert alert-danger\">Fel användarnamn eller lösenord. Försök igen!</a></p>";
        }
        ?>
    </div>
</body>

</html>