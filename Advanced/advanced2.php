<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./advanced2.css">
    <title>Complete-Advanced</title>

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
    $jsonComplete = file_get_contents("./complete-adv.json");
    $complete_adv = json_decode($jsonComplete);
    $nrQuestion = 0;
    echo "<span style='font-size: 1.8vw;' class='split left'>";
    echo "<div>";
    echo "<h4>Intrebarea Nr. " . $complete_adv[$nrQuestion]->nr . " - Level: " . $complete_adv[$nrQuestion]->level . "</h4>";
    echo "<p>" . $complete_adv[$nrQuestion]->question . "</p>";
    echo "<form action='./advanced2.php' method='GET'>";
    echo '<textarea style="font-size: 1.5vw;
                background-color: transparent;" 
                rows=5 cols=50 maxlength=' 
                . $complete_adv[$nrQuestion]->max . '>' 
                . $complete_adv[$nrQuestion]->text 
                . '</textarea>';
    echo '<input class="sub" type="submit" value="Verify">';
    echo '</form>';
    echo '<div class="button">';
    echo '<a href="#">PREVIOUS</a>';
    echo '<a href="#">NEXT</a>';
    echo '</div>';
    echo "</div>";
    echo '</span>';

    echo "<span class='split right'>";
    echo '</span>';
    ?>
</body>

</html>