<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Пользователь</title>
</head>
<body style=" background-image: url(../image/fon3.jpg);">
<header>
        <div class="head">
            <div class="logoName">
                <img src="../image/Фон.png" alt="Логотип">
                <h1>Пандочка</h1>
            </div>
            <div class="flexBur">
              <div class="nav">
                <img src="../image/burger.png"  alt="menu" class="imageMenu" id="imageMenu">
               
            </div>
            <div id="burgerMenu">
                <a href="../index.php" class="aMenu" >Главная</a>
                <a href="katalog.php" class="aMenu" >Каталог</a>
                <a href="contact.php" class="aMenu" >Контакты</a>
                <a href="basket.php" class="aMenu" >Корзина</a>
                </div>  
            </div>
            
            <nav>
                <a href="../index.php">Главная</a>
                <a href="katalog.php">Каталог</a>
                <a href="contact.php">Контакты</a>
                <a href="#">Корзина</a>
            </nav>



            <div style="margin:30px 80px 0 0">
            <a href="../index.php" style="text-decoration:none; color:black;">
            <?php
                if(isset($_SESSION["name"])){
                    echo  $_SESSION["name"]; 
                    // unset($_SESSION["name"]);
                    }
                ?></a>
                
            </div>
        </div>
    </header>

    <main>
                    <p style="text-align:center; padding:67px 0 60px 0;">Здесь пока ничего нет</p>
                    <p style="text-align:center; padding-bottom:60px;">Делайте покупки и возвращайтесь</p>
    </main>

    <footer>
        <div class="logoName">
            <img src="../image/Фон.png" alt="Логотип">
            <h1>Пандочка</h1>
        </div>
        <p>Copyrited 2021 </p>
    </footer>
</body>
</html>