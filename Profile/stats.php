<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stats.css">
    <title>Statistics</title>
</head>
<body>
    <nav class="nav">
        <a href="#" id="learn_btn">Learn</a>
        <a href="#" id="home_btn"> Home</a>
        <section class="username">
            <a href="#">Username</a>
            <div class="content">
                <a href="#">Profile</a>
                <a href="#">Statistics</a>
                <a href="#">Logout</a>
            </div>
        </section>
    </nav>
    <?php
    $jsonStatistics = file_get_contents("./stats.json");
    $jsonStats = json_decode($jsonStatistics);
    $nrUser = 0;
    echo "<div class='statCont'>";
    echo "<h4 class='stat' id='day'>Day streak: " . $jsonStats[$nrUser]->days . "</h4>";
    echo "<h4 class='stat' id='lev'>Solved Levels: " . $jsonStats[$nrUser]->solvedLevels . "</h4>";
    echo "<h4 class='stat' id='pag'>Read Pages: " . $jsonStats[$nrUser]->readPages . "</h4>";
    echo "<h4 class='stat' id='score'>Score: " . $jsonStats[$nrUser]->score . "</h4>";
    echo "</div>";
    ?>
</body>
</html>