<?php
include "konfigdb.php"
?>

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

        // Ta emot data från formuläret
        $namn = filter_input(INPUT_POST, "namn");
        $email = filter_input(INPUT_POST, "email");
        $lösen = filter_input(INPUT_POST, "lösen");

        // Testa att det fungerar
        /* var_dump($namn, $email, $lösen); */

        // Kolla så att det INTE är "null"
        if ($namn && $email && $lösen) {

            // Lagra i databasen
            // 1. SQL kommandot
            $sql = "INSERT INTO register (namn, epost, hash) VALUES ('$namn', '$email', '$lösen')";

            // 2. Kör SQL kommandot
            $resultat = $conn->query($sql);

            // 3. Fungerar det?
            if (!$resultat) {
                die("Någonting blev fel!");
            } else {
                echo "<p>Användaren $namn är registrerad</p>";
            }
        };

        ?>
    </div>
</body>

</html>