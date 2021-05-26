<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./advanced1.css">
    <title>Grila-Advanced</title>

</head>

<body>
    <nav class="nav">
        <a href="#" id="back_btn"> Back</a>
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
    $jsonGrila = file_get_contents("./grila-adv.json");
    $grila_adv = json_decode($jsonGrila);
    $nrQuestion = 0;
    echo "<span style='font-size: 1.8vw;' class='split left'>";
    echo "<div>";
    echo "<h4>Intrebarea Nr. " . $grila_adv[$nrQuestion]->nr . " - Level: " . $grila_adv[$nrQuestion]->level . "</h4>";
    echo "<p>" . $grila_adv[$nrQuestion]->question . "</p>";
    echo "<form action='./advanced1.php' method='GET'>";
    echo '<input type="radio" id="a1" name="grila" value=' . $grila_adv[$nrQuestion]->a1 . '>';
    echo '<label class="block" for="a1">' . $grila_adv[$nrQuestion]->a1 . '</label><br>';
    echo '<input type="radio" id="a2" name="grila" value=' . $grila_adv[$nrQuestion]->a2 . '>';
    echo '<label class="block" for="a2">' . $grila_adv[$nrQuestion]->a2 . '</label><br>';
    echo '<input type="radio" id="a3" name="grila" value=' . $grila_adv[$nrQuestion]->a3 . '>';
    echo '<label class="block" for="a3">' . $grila_adv[$nrQuestion]->a3 . '</label><br>';
    echo '<input class="sub" type="submit" value="Verify">';
    echo '</form>';
    echo '<div class="button">';
    echo '<a href="#">PREVIOUS</a>';
    echo '<a href="#">NEXT</a>';
    echo '</div>';
    echo '</div>';
    echo '</span>';

    echo "<span class='split right'>";
    echo '</span>';
    ?>
</body>

</html>