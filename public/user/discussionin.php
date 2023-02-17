<?php
session_start();

require '../../vendor/autoload.php';

use App\Database;

$db = new Database('turtle');

require '../../app/models/function.php';
require '../../app/controllers/DiscussionController.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:#F8F8F8">
    <header style="display: flex;justify-content: space-between;padding: 5% 5%;">

        <a href="index.php">
            <div style="display: flex;align-items: center;gap: 14%;">
                <div style="display: flex;">
                    <img src="../img/back.png" alt="">
                </div>
                <div>
                    <h1 style="margin: 0px;">Paris</h1>
                    <div style="width:max-content">
                        <div></div>
                        <p style="font-size: 10px;">10 membres en ligne</p>
                    </div>
                </div>
            </div>
        </a>
        <div style="width: 15%;display: flex;justify-content: space-between;align-items: center;gap: 15%;">
            <div style="width: 50%;">
                <img src="../img/banner.png" alt="" width="100%">
            </div>
            <div style="width: 50%;">
                <img src="../img/settings.png" alt="" width="100%">
            </div>
        </div>
    </header>
    <main class="disc">

      <div>Tout va bien pour toi ? </div>
      <div>Oui je viens de rentrer, tout va bien ! Merci d’être restée pour me parler ça m’a bien rassurée </div>
      <div>Ok trop bien ! Tu me dis si il y a autre chose</div>
      <div>Yes, encore merci ! Bonne soirée </div>
      <p style="color: red;">Mélanie vient d’appuyer sur le bouton Urgences</p>

    </main>
    <footer class="bar-msg">
        <form action="" method="post" class="form-msg">
            <input type="text" name="message" placeholder="Écris ton message">
            
        </form>
    </footer>
</body>

</html>