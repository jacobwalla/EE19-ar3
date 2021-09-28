<?php

// Tar emot data från formuläret
$namn = $_POST["namn"];
$adress = $_POST["adress"];
$mobil = $_POST["mobil"];

// Om namnet är Jacob
if ($namn == "Jacob") {
    echo "<p>Hej vad trevligt att du är här</p>";
} else {
    echo "<p>Hej, du är ny här</p>";
}


?>