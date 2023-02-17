<?php
session_start();

require '../../vendor/autoload.php';

use App\Database;

$db = new Database('turtle');

require '../../app/models/function.php';
require '../../app/controllers/SettingController.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
</head>

<body>
    <header></header>
    <main>
        <div style="display: flex;justify-content:space-between;align-items:center">
            <a href="index.php">
                <div style="display: flex;align-items: center;gap: 4%;">
                    <div style="display: flex;">
                        <img src="../img/back.png" alt="">
                    </div>
                    <p style="font-size: 20px;">Retour</p>
                </div>
            </a>
            <a href="setting.php" style="width: 5%;">
                <div style="display: flex;">
                    <img src="../img/pen.png" alt="" width="100%">
                </div>
            </a>
        </div>
        <h1>Mélanie Chapon</h1>
        <section class="form">
            <?php foreach ($userinfos as $user) { ?>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?= $user['nom'] ?>">
                <label for="email">E-mail</label>
                <input type="email" name="email" value="<?= $user['email'] ?>">
                <label for="numero">Numéro</label>
                <input type="number" name="numero" value="<?= $user['numero'] ?>">
                <h2>Mes contacts d’urgence</h2>
                <label for="nomC">Nom</label>
                <input type="text" name="nomC" value="<?= $user['nomC'] ?>">
                <label for="numeroC">Numéro</label>
                <input type="number" name="numeroC" value="<?= $user['numeroC'] ?>">
                <button style="height: auto;font-size: 14px;">Ajouter un autre contact</button>
                
            <?php }  ?>
        </section>
        <a href="deconnexion.php" style="color: #ED4E4E;text-decoration: underline;">Déconnexion</a>



    </main>

</body>

</html>