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
    <header style="display: flex;justify-content: space-between;padding: 0 5%;">

        <a href="index.php">
            <div style="display: flex;align-items: center;gap: 4%;">
                <div style="display: flex;">
                    <img src="../img/back.png" alt="">
                </div>
                <p style="font-size: 20px;">Retour</p>
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
    <main>

        <section class="section-player">
            <h1>PAPA</h1>
            <div>
                <audio src="../audios/audio1.m4a" controls class="audio"></audio>
            </div>
            <div class="btn-play"><img src="../img/play.png" alt="" width="50%"></div>
        </section>
        <section class="section-player-infos">
            <h3 style="font-size: 18px;color:#050505">Ton interlocuteur</h3>
            <h3 style="font-size: 18px;color:#00BD9D">Qand tu dois parler</h3>
        </section>
        <section style="overflow-y: hidden;">
            <div class="paroles">
                <p>salut chérie, ca va ?</p>
                <p>Hello papa, oui ca va merci, je suis dans le taxi vers [ta destination]</p>
                <p>Ok je suis juste à côté je peux t’y retrouver</p>
                <p>Parfait ça me va, tu peux y être dans combien de temps ?</p>
                <p>J’y suis dans 2 minutes là.</p>
                <p>Ok parfait tu y seras déjà quand je vais arriver !</p>
                <p>Ok ma puce je t’attends.</p>
                <p>À tout de suite papa !</p>
            </div>

        </section>

    </main>
    <script src="app.js"></script>

</body>

</html>