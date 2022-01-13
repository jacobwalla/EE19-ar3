<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Madlibs</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1 class="display-4">Madlibs</h1>
        <?php
        // Ta emot data som skickas
        $adjective = filter_input(INPUT_POST, 'adjective', FILTER_SANITIZE_STRING);
        $verbIng = filter_input(INPUT_POST, 'verbIng', FILTER_SANITIZE_STRING);
        $food = filter_input(INPUT_POST, 'food', FILTER_SANITIZE_STRING);
        $noun = filter_input(INPUT_POST, 'noun', FILTER_SANITIZE_STRING);
        $pluralNoun = filter_input(INPUT_POST, 'pluralNoun', FILTER_SANITIZE_STRING);
        $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
        $bodyPart = filter_input(INPUT_POST, 'bodyPart', FILTER_SANITIZE_STRING);


        if ($adjective && $verbIng && $food && $noun && $number && $bodyPart) {
            // Lager av olika verb
            $verben = ["eat", "bake", "sing", "avoid", "blow", "cry", "drink", "kill", "jump", "love", "fuck", "open", "paint", "regret", "run", "say", "talk", "wait"];

            // Skriv ut madlibs
            echo "<p><strong>Mario:</strong> What a/an $adjective day, eh Luigi? The perfect day for <br> $verbIng some Koopas. The $food Kingdom is <br> crawling with them! <br></p> 
            <p><strong>Luigi:</strong> You're right about that, dear $noun. I hope you're ready <br> to " . $verben[rand(0, 18)] . ".</p>
            <p><strong>Mario:</strong> Ready? I've waited $number years to " . $verben[rand(0, 18)] . " that <br> scoundrel Bowser! <br></p>
            <p><strong>Luigi:</strong> Pipe down. He has $bodyPart everywhere. <br></p>
            <p><strong>Mario:</strong> First, I'll " . $verben[rand(0, 18)] . " and grab a/an $food. That'll <br> give me $noun. <br></p>
            <p><strong>Luigi:</strong> And I'll grab a/an $adjective star. Then I'll be the most <br> $adjective plumber of all time. <br></p>
            <p><strong>Mario:</strong> Remember we're there to rescue Princess $noun, Luigi. <br> Once we do that we'll be heroes! <br></p>";
        }

        ?>
    </div>
</body>
</html>