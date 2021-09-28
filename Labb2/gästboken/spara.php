<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gästbok</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1 class="display-4">Gästbok</h1>
        <?php
        $rubrik = filter_input(INPUT_POST, "rubrik", FILTER_SANITIZE_STRING);
        $meddelande = filter_input(INPUT_POST, "meddelande", FILTER_SANITIZE_STRING);
        $namn = filter_input(INPUT_POST, "namn", FILTER_SANITIZE_STRING);

        if ($rubrik && $meddelande && $namn) {
            $filnamn = "gastbok.txt";

            $texten = "
            $rubrik
            $meddelande
            $namn
            ";

            file_put_contents($filnamn, $texten);

            echo "<p class=\"alert alert-success\">Meddelandet sparades</p>";
        } else {
            echo "<p class=\"alert alert-danger\">Error 404!</p>";
        }
        ?>
    </div>
</body>

</html>