<?php
session_start();
$username = $_SESSION['username'];
$db = mysqli_connect('localhost', 'root', 'password', 'registration');
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}


$qry = mysqli_query($db, "select * from users where username='$username'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if (isset($_POST['update'])) // when click on Update button
{
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];

  $edit = mysqli_query($db, "update users set nume='$firstname', prenume='$lastname' where username='$username'");

  if ($edit) {
    mysqli_close($db); // Close connection
    // redirects to all records page
    header("location: /Lehs/userProfile.php");
    exit;
  }
}
if (isset($_POST['delete'])) {
  $edit = mysqli_query($db, "delete from users where username='$username'");
  if ($edit) {
    unset($_SESSION['username']);
    mysqli_close($db); // Close connection
    header("location: /Lehs/firstPage.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="edit.css"></a>
</head>

<body>



  <nav class="nav">
    <a href="firstpage.php" id="home_btn"> Acasa</a>
    <div class="username">
      <?php
      if (isset($_SESSION['username'])) :
        echo $_SESSION['username'];
      else :
        echo 'Utilizator';
      endif;

      ?>
      <div class="info">
        <a href="http://localhost:3000/LeHS/userProfile.php">Inapoi</a>
        <a href="http://localhost:3000/LeHS/statistics.php">Statistici</a>
        <a href="http://localhost:3000/LeHS/game/highscore.html">Clasament</a>
      </div>
    </div>
  </nav>


  <form method="POST">
    <div class="input-group">
      <input type="text" name="firstname" value="<?php echo $data['nume'] ?>" placeholder="Nume">
    </div>
    <div class="input-group">
      <input type="text" name="lastname" value="<?php echo $data['prenume'] ?>" placeholder="Prenume">
    </div>
    <input type="submit" name="update" value="Update" class="btn">
    <input type="submit" name="delete" value="Delete" class="btn delete">
  </form>
</body>

</html>