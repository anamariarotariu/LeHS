<?php
if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: /Intermediate/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: /Intermediate/login.php");
  }
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userPofile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <title>User page</title>
</head>
<body>
        <nav class="nav">
            <ul>
            <li>
                    <a href="userProfile.php?logout='1'" class="nav-log" >Logout</a>
                    <a href="firstpage.php" class=" nav--btns home--btn">Acasă</a>
                    
                </li>
            </ul>
        </nav>
        <main>
            <div class="user__page">
                <img src="./images/userlogo.jpg" alt="user-logo" class="user--logo">
                <div class="user__info">
                    <p>First Name</p>
                    <p>Last Name</p>
                    <p>Email</p>
                </div>
                <button type="button" class="edit--btn">Edit info <i class="fas fa-pencil-alt"></i></button>
            </div>
        </main>
</body>
</html>