<?php
session_start();

require '../vendor/autoload.php';

use App\Database;

$db = new Database('turtle');

require '../app/models/function.php';
require '../app/controllers/ConnexionController.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turtle</title>
</head>

<body class="body-connexion">
    <header></header>
    <main class="main-connexion">
        <div class="div-main">
            <h1>Se connecter</h1>
            <?php if (isset($error)) { ?>
                <div>
                    <h4 style="color: red;">Mot de passe ou email incorrect</h4>
                </div>
            <?php } ?>
            <form action="" method="post" class="form">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Mots de passe">
                <button type="submit">Se connecter</button>
            </form>
        </div>
    </main>
    <footer></footer>
</body>

</html>