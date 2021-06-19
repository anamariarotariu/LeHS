<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div id="end" class="flex-center flex-column">
            <h1 id="final--score"></h1>
            <form>
                <input type="text" name="username" id="username--input" placeholder="username">
                <button type="submit" class="btn" id="save__score--btn" onclick="saveHighscore(event)" disabled>Salveaza</button>
            </form>
            <a href="game.php" class="btn">Play Again</a>
            <a href="/lehs/firstpage.php " class="btn"> Acasa</a>
        </div>
    </div>
    <script src="end.js"></script>
</body>
</html>