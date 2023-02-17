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
        <div style="display: flex;justify-content:space-between;align-items: center;">
            <h1>Favoris</h1>
            <a href="setting.php" style="width: 10%;">
                <div>
                    <img src="../img/settings.png" alt="" width="100%">
                </div>
            </a>
        </div>
        <div class="search">
            <input type="text" name="search">
            <div style="background-color: black;width: 15%;border-radius: 0px 5px 5px 0px;display: flex;align-items: center;justify-content: center;">
                <img src="../img/Vector.png" alt="">
            </div>
        </div>
        <div style="width: fit-content;padding: 1% 5%;border: solid 1px black;margin: 5% 0%;">
            <p style="width: fit-content;margin: 0px;">Filtres</p>
        </div>
        <section>
            <h2>Récemment utilisé </h2>
            <div class="card-vocaux">
                <a href="">
                    <div>
                        <p style="text-align: center;width: max-content;">Tu es dans un taxi</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p style="text-align: center;width: max-content;">Tu es dans la rue</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p style="text-align: center;width: max-content;">Tu es dans la rue</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p style="text-align: center;width: max-content;">Tu es dans un taxi</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p style="text-align: center;width: max-content;">Tu es dans la rue</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p style="text-align: center;width: max-content;">Tu es dans la rue</p>
                    </div>
                </a>
            </div>
        </section>
        <section>
            <h2>Famille</h2>
            <div class="card-vocaux">
                <a href="">
                    <div>
                        <p style="text-align: center;width: max-content;">Tu es dans un taxi</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p style="text-align: center;width: max-content;">Tu es dans la rue</p>
                    </div>
                </a>
            </div>
        </section>
        <section>
            <h2>Amis</h2>
            <div class="card-vocaux">
                <a href="">
                    <div>
                        <p style="text-align: center;width: max-content;">Tu es dans un taxi</p>
                    </div>
                </a>
            </div>
        </section>

    </main>
    <footer>
        <div class="cardcenter">
            <a href="urgence.php"><img src="../img/alert-triangle.png" alt=""></a>
        </div>
        <div style="display: flex;width: 100%;justify-content: space-around;align-items: center;gap:15%">
            <div style="display: flex;width: 50%;justify-content: space-evenly;align-items:center">
                <div class="cardtab">
                    <a href="discussion.php">
                        <div><img src="../img/chat.png" alt=""></div>
                    </a>
                </div>
                <div class="cardtab">
                    <a href="safeplace.php">
                        <div><img src="../img/map.png" alt=""></div>
                    </a>
                </div>
            </div>
            <div style="display: flex;width: 50%;justify-content: space-evenly;">
                <div class="cardtab">
                    <a href="index.php">
                        <div><img src="../img/headphones.png" alt=""></div>
                    </a>
                </div>
                <div class="cardtab">
                    <a href="favorie.php">
                        <div><img src="../img/heart2.png" alt=""></div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>