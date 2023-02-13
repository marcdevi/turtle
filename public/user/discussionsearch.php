<?php 
session_start();

?>
<?php

require '../../vendor/autoload.php';

use App\Database;

$db = new Database('turtle');

require '../../app/models/function.php';
require '../../app/controllers/SearchdiscussionController.php';



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
        <h1>Tes discussions</h1>
        <div class="search">
            <input type="text" name="search">
            <div style="background-color: black;width: 15%;border-radius: 0px 5px 5px 0px;display: flex;align-items: center;justify-content: center;">
                <img src="../img/Vector.png" alt="">
            </div>
        </div>
        <section style="margin-top: 10%;">
        <?php foreach($ville as $villes) { ?>
            <div style="display: flex;margin-bottom: 5%;height: 90px;">
                <div style="padding: 2% 5%;border: solid 1px;width: 80%;border-right-width: 0px;border-radius: 10px 0px 0px 10px;z-index: 1;display: flex;flex-direction: column;justify-content: space-around;">
                    <h1 style="margin: 0;"><?= $villes['nom']?></h1>
                    <p style="margin: 0;"><?= $villes['nombre_membres']?> membres</p>
                </div>
                <a href="" style="background-color: #8980F5;width: 30%;border-radius: 0px 10px 10px 0px;/* z-index: 2; */display: flex;justify-content: center;align-items: center;">
                    <div>
                        <img src="../img/add.png" alt="">
                    </div>
                </a>
            </div>
        <?php } ?>
        </section>


    </main>
    <footer>
        <div class="cardcenter">
            <a href="urgence.php"><img src="../img/alert-triangle.png" alt=""></a>
        </div>
        <div style="display: flex;width: 100%;justify-content: space-around;align-items: center;gap:15%">
            <div style="display: flex;width: 50%;justify-content: space-evenly;align-items:center">
                <div class="cardtab">
                    <a href="discussion.php"><div><img src="../img/chat.png" alt=""></div></a>
                </div>
                <div class="cardtab">
                    <a href="safeplace.php"><div><img src="../img/map.png" alt=""></div></a>
                </div>
            </div>
            <div style="display: flex;width: 50%;justify-content: space-evenly;">
                <div class="cardtab">
                    <a href=""><div><img src="../img/headphones.png" alt=""></div></a>
                </div>
                <div class="cardtab">
                    <a href=""><div><img src="../img/heart.png" alt=""></div></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>