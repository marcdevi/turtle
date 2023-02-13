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
        <section class="section-safeplace1">
            <div class="section-safeplace1-head"></div>
            <div class="section-safeplace1-galerie">
                <h1>Once Cocktail Bar</h1>
                <div style="display: flex;justify-content: space-between;align-items: end;">
                    <div style="display: flex;justify-content: space-between;width: 60%;">
                        <div class="infos-card">
                            <div style="display: flex;"><img src="../img/car.png" alt="" srcset=""></div>
                            <p style="font-size: 8px;color: white;margin: 0px;">5 mins</p>
                        </div>
                        <div class="infos-card">
                            <div style="display: flex;"><img src="../img/car.png" alt="" srcset=""></div>
                            <p style="font-size: 8px;color: white;margin: 0px;">5 mins</p>
                        </div>
                        <div class="infos-card">
                            <div style="display: flex;"><img src="../img/car.png" alt="" srcset=""></div>
                            <p style="font-size: 8px;color: white;margin: 0px;">5 mins</p>
                        </div>
                    </div>
                    <div style="width: 7%;display: flex;">
                        <img src="../img/googlemap.png" alt="" width="100%">
                    </div>
                </div>
                <div style="display: flex;justify-content: space-between;">
                    <p>60 Rue de Montreuil</p>
                    <p>à 2 km</p>
                </div>
            </div>
            <div style="width: 100%;"><img src="../img/safeplaceimg2.png" alt="" width="100%">
                <div style="display: flex;justify-content: space-between;margin-top:1%">
                    <div style="width: 49%;"><img src="../img/safeplaceimg3.png" alt="" width="100%"></div>
                    <div style="width: 49%;"><img src="../img/safeplaceimg4.png" alt="" width="100%"></div>
                </div>
            </div>
        </section>
        <section style="margin-top: 15%;">
            <button>J'arrive !</button>
        </section>
        
    </main>

</body>

</html>