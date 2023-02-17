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
        <h1>Tes discussions</h1>
        <div class="search">
            <input type="text" name="search">
            <div style="background-color: black;width: 15%;border-radius: 0px 5px 5px 0px;display: flex;align-items: center;justify-content: center;">
                <img src="../img/Vector.png" alt="">
            </div>
        </div>
        <section style="margin-top: 10%;">
            <div class="disc-card">
                <div><h1>Paris</h1></div>
                <div class="disc-card-infos">
                    <div><p style="margin: 0px;">13:55</p></div>
                    <div style="    height: 20px;width: 20px;background-color: #00BD9D;border-radius: 100%;"><p style="position: absolute;margin: 0px;color:white">5</p></div>
                </div>
            </div>
            <div class="disc-card">
                <div><h1>Bordeaux</h1></div>
                <div class="disc-card-infos">
                    <div><p style="margin: 0px;">13:55</p></div>
                    <div style="    height: 20px;width: 20px;background-color: #00BD9D;border-radius: 100%;"><p style="position: absolute;margin: 0px;color:white">5</p></div>
                </div>
            </div>
            <div class="disc-card">
                <div><h1>Biarritz</h1></div>
                <div class="disc-card-infos">
                    <div><p style="margin: 0px;">13:55</p></div>
                    <div style="    height: 20px;width: 20px;background-color: #00BD9D;border-radius: 100%;"><p style="position: absolute;margin: 0px;color:white">5</p></div>
                </div>
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
                    <a href="discussion.php"><div><img src="../img/chat2.png" alt=""></div></a>
                </div>
                <div class="cardtab">
                    <a href="safeplace.php"><div><img src="../img/map.png" alt=""></div></a>
                </div>
            </div>
            <div style="display: flex;width: 50%;justify-content: space-evenly;">
                <div class="cardtab">
                    <a href="index.php"><div><img src="../img/headphones.png" alt=""></div></a>
                </div>
                <div class="cardtab">
                    <a href="favorie.php"><div><img src="../img/heart.png" alt=""></div></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>