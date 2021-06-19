<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
<<<<<<< Updated upstream
    header('location: /LeHS/login.php');
=======
    header('location: /lehs/login.php');
>>>>>>> Stashed changes
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
<<<<<<< Updated upstream
    header("location: /LeHS/login.php");
=======
    header("location: /lehs/login.php");
>>>>>>> Stashed changes
}
?>

<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="game.css">
    <title>Game</title>
</head>

<body>

    <p> <a href="game.php?logout='1'">Logout</a> </p>




    <div class="container">
        <div id="loader"></div>
        <div id="game" class="justify-center flex-column hidden">


            <div id="hud">
                <div id="hud-item1">
                    <p id="progress" class="hud-prefix">
                    </p>
                    <div id="progress--bar">
                        <div id="progress--bar--full">

                        </div>
                    </div>
                </div>
                <div id="hud-item2">
                    <p class="hud-prefix">
                        Score
                    </p>
                    <h1 class="hud-main-text" id="score"> 0</h1>
                </div>
            </div>




            <h2 id="question"> </h2>
            <div class="choice-container">
                <p class="choice-prefix">A</p>
                <!-- data-number is a custom attribute  -->
                <p class="choice-text" data-number="1"></p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">B</p>
                <p class="choice-text" data-number="2"></p>
            </div>
            <div class="choice-container">
                <p class="choice-prefix">C</p>
                <p class="choice-text" data-number="3"></p>
            </div>

        </div>



        <div class="flip-cover-hint"></div>


        <div class="btn">
            <div class="btn-back">
                <p>Are you sure you want to do that?</p>
                <a href="end.php" class="yes">Yes</a>
                <button class="no">No</button>
            </div>
            <div class="btn-front">Quit</div>
        </div>
    </div>
    <script src="game.js"></script>
    <script src="quitbutton.js"></script>
    <script src="hintbutton.js"></script>






</body>

</html>