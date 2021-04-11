<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./profile.css">
    <title>User Page</title>
</head>
<body>
    <nav class="nav">
        <a href="#" id="learn_btn">Learn</a>
        <a href="#" id="home_btn"> Home</a>
        <section class="username">
            <a href="#">Username</a>
            <div class="content">
                <a href="#">Profile</a>
                <a href="#">Statistics</a>
                <a href="#">Logout</a>
            </div>
        </section>
    </nav>
    <?php
    $jsonData = file_get_contents("profiles.json");
    $jsonUser = json_decode($jsonData);
    echo "<span>";
        echo "<div class='text'>";
            echo "<img src='./avatar.png' alt='profile pic'>";
            echo "<p id='f_name'>" . $jsonUser->f_name . "</p>";
            echo "<p id='l_name'>" . $jsonUser->l_name . "</p>";
            echo "<p id='email'>" . $jsonUser->email . "</p>";
            echo "<p id='phone'>" . $jsonUser->phone . "</p>";
            echo "<button id='reset' type='button'>Edit info</button>";
        echo "</div>";
    echo "</span>";
    ?>
</body>
</html>