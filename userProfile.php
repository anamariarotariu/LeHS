 <?php
 session_start(); 
if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:http://localhost:3000/LeHS/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location:http://localhost:3000/LeHS/login.php");
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
                    <a href="http://localhost:3000/LeHS/firstpage.php" class=" nav--btns home--btn">Acasă</a>
                    
                </li>
            </ul>
        </nav>

            <div class="user__page">
                <img src="./images/userlogo.jpg" alt="user-logo" class="user--logo">
                <div class="user__info">
                    
                 <p> Nume utlizator: <?php echo $_SESSION['username']?> <br>
                
                 <?php 
                 $db = mysqli_connect('localhost','root','','registration');
                 if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                  }
                 $username=$_SESSION['username'];
                 $query =("SELECT * FROM users WHERE username='$username'");
                  $result = mysqli_query($db, $query);

                  if (mysqli_num_rows($result) > 0) {
 
                  while($row = mysqli_fetch_assoc($result)) {
                 echo "id: " . $row["id"],
                 "<br>",
                 " Nume: " . $row["nume"],
                 "<br>",
                  "Prenume: " . $row["prenume"],
                   "<br>",
                   "Email: "  . $row["email"],
                   "<br>";
                }
            }
                 mysqli_close($db);
                ?>  
                 </div>
<div class="btn">
                 <a href="edit.php?username=<?php echo  $_SESSION['username']  ?>" >Edit</a>
        </div>
        
        </div>     
        
</body>
</html>