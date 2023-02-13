<?php
session_start();
require '../vendor/autoload.php';

use App\Database;

$db = new Database('turtle');

require '../app/models/function.php';
require '../app/controllers/adduserController.php';


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

<body>
    <header></header>
    <main>
        <h1>Créez votre mot de passe</h1>
        <form action="" class="form" method="post">
            <label for="nom">Mots de passe</label>
            <input type="password" name="password">
            <label for="passwordC">Confirmation mot de passe</label>
            <input type="password" name="passwordC">
            <div style="display: flex;justify-content: end;margin-top: 5%;">
                <button type="submit">Valider</button>
            </div>

        </form>
    </main>
    <footer>

    </footer>
</body>