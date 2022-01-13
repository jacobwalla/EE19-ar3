<?php

// Ta emot data
$rubrik = filter_input(INPUT_POST, "rubrik", FILTER_SANITIZE_STRING);
$meddelande = filter_input(INPUT_POST, "meddelande", FILTER_SANITIZE_STRING);

// Om data finns
if ($rubrik && $meddelande) {
    $texten = "<h2>$rubrik</h2><br>";
    $texten .= "<p>$meddelande</p>";

    file_put_contents("blogg.txt", $texten, FILE_APPEND);

    echo "<p>Inlägget sparades</p>";
}

?>