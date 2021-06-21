<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: http://localhost:3000/LeHS/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: http://localhost:3000/LeHS/login.php");
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
               
                <a href="http://localhost:3000/LeHS/learnHTML.php" class=" nav--btns home--btn">Inapoi</a>
                <a href="http://localhost:3000/LeHS/userProfile.php" class="nav--btns user--btn">  <?php 
         if(isset($_SESSION['username'])):
            echo $_SESSION['username']; 
         else:
          echo 'Utilizator';
         endif;

         ?> </a>
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