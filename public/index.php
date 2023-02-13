<?php
session_start();
require '../vendor/autoload.php';

use App\Database;

$db = new Database('turtle');

require '../app/models/function.php';
require '../app/controllers/AjoutController.php';

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
        <h1>Bienvenue sur Turtle</h1>
        <form action="" class="form" method="get">
            <label for="nom">Nom</label>
            <input type="text" name="nom">
            <label for="email">E-mail</label>
            <input type="email" name="email">
            <label for="numero">Numéro</label>
            <input type="number" name="numero">
            <h2>Qui contacter en cas d’urgence ? </h2>
            <label for="nomC">Nom</label>
            <input type="text" name="nomC">
            <label for="numeroC">Numéro</label>
            <input type="number" name="numeroC">
            <div style="display: flex;justify-content:space-between;margin-top: 5%;">
                <button>Ajouter un autre contacte</button>
                <button type="submit">Suivant</button>
            </div>

        </form>
    </main>
    <footer>

    </footer>
</body>