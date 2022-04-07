<?php
include "konfigdb.php";

// Ta emot data från formuläret
$email = filter_input(INPUT_POST, "email");
$pass = filter_input(INPUT_POST, "password");

// Kolla så att det INTE är "null"
if ($email && $pass) {

    // Kontrollera att användarnamnet eller emailen inte redan används
    $sql = "SELECT * FROM `register` WHERE epost='$email'";

    // Kör SQL kommandot
    $resultat = $conn->query($sql);

    // Gick det bra att köra SQL-satsen?
    if (!$resultat) {
        echo "Någonting blev fel!";
    } else {
        
        // Plocka ut svaret och lägg det i arrayen $rad
        $rad = $resultat->fetch_assoc();

        // Kolla om lösenordet och hashen matchar
        if (password_verify($pass, $rad['hash'])) {
            echo "Inloggad!";

        } else {
            echo "Email eller lösenord stämmer inte. Försök igen!";
        }
        

    }
    

};
