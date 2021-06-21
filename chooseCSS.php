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
    <title>Choose CSS Level</title>
</head>

<body>
<nav class="nav">
      <a href="firstpage.php" id="home_btn"> Acasa</a>
      <div class="username">
        <?php 
         if(isset($_SESSION['username'])):
            echo $_SESSION['username']; 
         else:
          echo 'Utilizator';
         endif;

         ?> 
      </div>
    </nav>


    <main>
    <div class="main__content">
       <div >
             <button type="submit" class="btn" onclick="showCSS1(event)" disabled>1</button>
       </div>  
       
             <div >
             <button type="submit" class="btn" onclick="showCSS2(event)" disabled>2</button>
       </div>  
      
             <div>
             <button type="submit" class="btn" onclick="showCSS3(event)" disabled>3</button>
       </div>  
        </div>

    </main>
</body>

</html>