<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css"> 
    <title>ewan_Nalang</title>
</head>
<body>
    <header>
        <h1>Gaming Favorites</h1>
        <p>Explore my favorite FromSoftware and all-time games!</p>
    </header>


    <main>
        <div id="fromsoft-games">
            <h1>List of My Fav FromSoftware Games</h1>
            <br>
            <?php
                $fromSoftGames = array("Armored Core", "Elden Ring", "Sekiro: Shadows Die Twice", "Dark Souls", "Demon's Souls");

                for ($i = 0; $i < count($fromSoftGames); $i++) {
                    echo $i + 1, ". ", $fromSoftGames[$i], "<br>";
                }

                if ($fromSoftGames[0] == "Armored Core" && $fromSoftGames[1] == "Elden Ring") {
                    echo "<h3>{$fromSoftGames[0]} and {$fromSoftGames[1]} are the Goated<br><br></h3>";
                }
            ?>
        </div>

        <br><br>

        <div id="favorite-games">
            <h1>List of My Favorite Games of All Time</h1>
            <br>
            <?php
            $favGames = array("God of War", "Armored Core", "Elden Ring", "Ghost of Tsushima", "Resident Evil");
            
            for ($i = 0; $i < count($favGames); $i++) {
                echo $i + 1, ". ", $favGames[$i], "<br>";
            }
            ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Gaming Favorites. All rights are not reserved. ;P</p>
        <a href="../index.php">
            <button>Back to Previous Page</button>
        </a>
    </footer>
</body>
</html>