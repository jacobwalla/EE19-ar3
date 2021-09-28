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
        <form class="kol2" action="lucktext.php" method="POST">
            <label>Adjektiv</label>
            <input type="text" name="adjektiv1" placeholder="" required>

            <label>Adjektiv2</label>
            <input type="text" name="adjektiv2" required>

            <label>Adverb</label>
            <input type="text" name="adverb" placeholder="" required>

            <label>Siffra</label>
            <input type="text" name="siffra" required>

            <label>Substantiv1</label>
            <input type="text" name="substantiv1" placeholder="" required>

            <label>Substantiv2</label>
            <input type="text" name="substantiv2" required>

            <label>Kön1</label>
            <input type="text" name="kön1" placeholder="Kille/Tjej" required>

            <label>Kön2</label>
            <input type="text" name="kön2" placeholder="Han/Hon" required>

            <button class="primary">Skapa Text</button>
            <?php

            $adj1 = filter_input(INPUT_POST, "adjektiv1", FILTER_SANITIZE_STRING);
            $adj2 = filter_input(INPUT_POST, "adjektiv2", FILTER_SANITIZE_STRING);
            $adV = filter_input(INPUT_POST, "adverb", FILTER_SANITIZE_STRING);
            $siffra = filter_input(INPUT_POST, "siffra", FILTER_SANITIZE_STRING);
            $sub1 = filter_input(INPUT_POST, "substantiv1", FILTER_SANITIZE_STRING);
            $sub2 = filter_input(INPUT_POST, "substantiv2", FILTER_SANITIZE_STRING);
            $kon1 = filter_input(INPUT_POST, "kön1", FILTER_SANITIZE_STRING);
            $kon2 = filter_input(INPUT_POST, "kön2", FILTER_SANITIZE_STRING);

            echo "En $adjektiv1 $kon1 är hemma och kollar på netflix som $kon2 brukar göra. $kon2 kollar på en $adV serie och är på avsnitt $siffra. $kon2 har en $adjektiv2 hund som heter $sub1 och en katt som heter $sub2"

            ?>
    </div>
</body>

</html>