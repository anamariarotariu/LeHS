<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="chooseLevels.css">
      <script src="./game/util.js"> </script>
      <title>Choose CSS Level</title>
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
            </div>
      </nav>


      <main>
            <div class="main__content">
                  <div>
                        <a href="./game/game.php" class="btn" onclick="chooseLevel1CSS()">1</a>
                  </div>

                  <div>
                        <a href="./game/game.php" class="btn" onclick="chooseLevel2CSS()">2</a>
                  </div>

                  <div>
                        <a href="./game/game.php" class="btn" onclick="chooseLevel3CSS()">3</a>
                  </div>
            </div>

      </main>
</body>

</html>