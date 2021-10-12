<?php

/*     if (isset($_GET["submit"])) {
        echo $_GET["email"];
        echo $_GET["title"];
        echo $_GET["ingredients"];
    } */

    if (isset($_POST["submit"])) {
        echo $_POST["email"];
        echo $_POST["title"];
        echo $_POST["ingredients"];
    }

?>

<!DOCTYPE html>
<html>

    <?php include("template/header.php"); ?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form class="white" action="add.php" method="POST"></form>
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients (comma seperated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </section>

    <?php include("template/footer.php"); ?>


</html>