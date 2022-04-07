<?php
include "konfigdb.php";
session_start();

if (!isset($_SESSION['inloggad'])) {
    $_SESSION['inloggad'] = false;
}

?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloggen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <div class="title-box1">
            <div class="title-box">
                <h1>Bloggen</h1>
            </div>
        </div>
        <nav>
            <ul class="nav justify-content-center">
                <?php
                if ($_SESSION['inloggad'] == false) {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="login.php">Logga In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="regi.php">Registrera</a>
                    </li>
                <?php
                } else {
                ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="admin.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logga Ut</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </nav>
    </div>
    <div class="hem-kontainer">
        <h1>Skapa din första blogg nu!</h1>
        <p>Det är enkelt och helt gratis!</p>
    </div>

</body>

</html>