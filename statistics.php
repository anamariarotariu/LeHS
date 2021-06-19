<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: /lehs/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: /lehs/login.php");
  }
?>


<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- pentru stilizarea nav-ului -->
    <link rel="stylesheet" href="userPofile.css">
    <link rel="stylesheet" href="statistics.css">
    <title>Statistics</title>
</head>
<body>
<nav class="nav">
        <ul>
            <li>
               
                <a href="learnHTML.html" class=" nav--btns home--btn">Inapoi</a>
                <a href="userProfile.php" class="nav--btns user--btn"> Username</a>
            </li>
        </ul>
    </nav>
    <main>
        <div class="main__content">
            <div class="statistics__info">
                <p>Zilele consecutive in aplicatie: 10</p>
                <p>Numar de raspunsuri oferite: 3</p>
                <p>Numar de pagini citite: 1</p>
                <p>Scor: 100</p>
            </div>
           
        </div>
    </main>
</body>
</html>