<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Itunes API</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="kontainer">
        <h1>ITunes Artist Sök</h1>
        <form action="#" method="post">
            <label>Sök Artist Namn</label><input type="text" name="artist">
            <button>Sök</button>
        </form>
        <?php
        $artist = filter_input(INPUT_POST, "artist");
        if ($artist) {
            // cst = correct search term
            $cst = str_replace(' ', '+', $artist);
            $cst2 = $cst . "&limit=10";
            $url = "https://itunes.apple.com/search?term=$cst2";
            $json = file_get_contents("$url");


            $jsonData = json_decode($json);
            $resultCount = $jsonData->resultCount;
            $results = $jsonData->results;

            echo "<table><tr><th>Top 10 songs by $artist</th></tr>";
            foreach ($results as $i) {
                $track = $i->trackName;
                $artistName = $i->artistName;
                $genre = $i->primaryGenreName;
                $bild = $i->artworkUrl100;
                $tid = $i->trackTimeMillis / 1000;
                echo "<tr><td><img src=\"$bild\">$track <span>by $artistName</span> - $genre - <span>Time: $tid sekunder</span></td></tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>

</html>