<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="styleLR.css">
	<title>RegistrationPage</title>
</head>
<body>
  
<nav class="nav">
    <a href="http://localhost:3000/LeHS/firstpage.php" id="home_btn"> Acasa</a>
	<a href="http://localhost:3000/LeHS/learnHTML.php" id="HTML_btn"> HTML</a>
    <a href="http://localhost:3000/LeHS/documentatieCSS.php" id="CSS_btn"> CSS</a>
</nav>


<div class="page">
<div class="image">
<img src="./images/login.png" alt="loginImage" id="background_container--img">
</div>
<div class="register">

  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
	  <div class="input-group">
  	  <label>Nume </label>
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Prenume</label>
  	  <input type="text" name="lastname" value="<?php echo $lastname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Nume utilizator</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Parola</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirma parola</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Inregistreaza-te</button>
  	</div>

  	<p>Ai deja cont?</p>
	<p> <a href="http://localhost:3000/LeHS/login.php">Logheaza-te</a></p>
  	
  </form>
</div>
</div>
</body>
</html>