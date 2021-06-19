<?php 
session_start();
include('server.php');

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="styleLR.css">
</head>

<body>

  <nav class="nav">
    <a href="firstpage.php" id="home_btn"> Acasa</a>
    <a href="learnHTML.html" id="HTML_btn"> HTML</a>
    <a href="documentatieCSS.html" id="CSS_btn"> CSS</a>
  </nav>



  <div class="page">

<<<<<<< Updated upstream
    <div class="image">
      <img src="./images/login.png" alt="loginImage" id="background_container--img">
    </div>


    <div class="login">
      <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
          <label>Nume utilizator</label>
          <input type="text" name="username">
        </div>
        <div class="input-group">
          <label>Parola</label>
          <input type="password" name="password">
        </div>
        <div class="input-group">
          <button type="submit" class="btn" name="login_user">Logheaza-te</button>
        </div>

        <p> Sau poti folosi</p>
        <img src="./images/gitHub.png" id="github_alt" class="alternatives_login" alt="githubLogo">
        <p>Daca nu ai un cont </p>
        <a href="register.php" class="reglink">Inregistreaza-te</a>
=======
   <div class="image">
   <img src="./images/login.png" alt="loginImage" id="background_container--img"></a>
   </div>





<div class="login">
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Nume utilizator</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Parola</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Logheaza-te</button>
  	</div>

      <p> Sau poti folosi</p>
      <a href="https://github.com/login/oauth/authorize?client_id=0d14309be059b9ea254d"><img src="./images/gitHub.png" id="github_alt" class="alternatives_login" alt="githubLogo"></a>
     <p>Daca nu ai un cont </p>
  		<a href="register.php" class="reglink">Inregistreaza-te</a>
  	 
  </form>
</div>
>>>>>>> Stashed changes

      </form>
    </div>

  </div>
</body>

</html>