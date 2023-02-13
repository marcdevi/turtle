<?php 
session_start();

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
        <a href="index.php">
            <div style="display: flex;align-items: center;gap: 4%;">
                <div style="display: flex;">
                    <img src="../img/back.png" alt="">
                </div>
                <p style="font-size: 20px;">Retour</p>
            </div>
        </a>
        <section class="section-urgence">
            <div><h2 style="text-align: center;">Appeler Maman</h2></div>
            <div><h2 style="text-align: center;">Appeler Papa</h2></div>
            <div><h2 style="text-align: center;">Appeler Sarah</h2></div>
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