<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Панда</title>
</head>

<body style=" background-image: url(image/fon3.jpg);">
    <!--Шапка сайта-->
    <header>
        <div class="head">
            <div class="logoName">
                <img src="image/Фон.png" alt="Логотип">
                <h1>Пандочка</h1>
            </div>
            <div class="flexBur">
              <div class="nav">
                <img src="image/burger.png"  alt="menu" class="imageMenu" id="imageMenu">
               
            </div>
            <div id="burgerMenu">
                <a href="index.php" class="aMenu" >Главная</a>
                <a href="sait/katalog.php" class="aMenu" >Каталог</a>
                <a href="sait/contact.php" class="aMenu" >Контакты</a>
                <a href="sait/basket.php" class="aMenu" >Корзина</a>
                </div>  
            </div>
            
            <nav>
                <a href="index.php">Главная</a>
                <a href="sait/katalog.php">Каталог</a>
                <a href="sait/contact.php">Контакты</a>
                <a href="sait/basket.php">Корзина</a>
            </nav>



            <div class="nikis1">
            <?php
                if($_SESSION['name']){
                    echo '<p class="user">'.$_SESSION['name'].'</p>';
                    echo '<form action="php/vx.php"><input class="bt" type="submit" value="Выйти"></form>';
                }else{
                    echo '<button class="submitHead" id="avt">Войти</button>';
                }
                ?>
            </div>
        </div>
        
        <div class="backgrounds">
            <div class="contaynerRegister" style="display:none;">
                <div class="topPopup">
                    <div class="variable">
                        <h3 id="window1">Вход</h3>
                        <h3 id="window2">Регистрация</h3>
                    </div>
                    <p class="close" id="closer">X</p>
                </div>
                <div class="windowe">
                    <form action="php/autorisationConnect.php" method="post">
                        <input type="text" name="login" placeholder="Введите ваш логин" required class="logIn" id="logiN"><br><br>
                        <input type="text" name="password" placeholder="Введите ваш пароль" required class="pasWor"><br><br>
                        <input type="submit" value="Вход" id="button2">
                    </form>
                </div>
                <div class="window">
                    <form action="php/dataVerification.php" method="post">
                        <input type="text" name="name" placeholder="Введите ваше имя" class="logIn" required><br><br>
                        <input type="email" name="email" placeholder="Введите ваш email" class="pasWor" required><br><br>
                        <input type="text" name="login" placeholder="Введите ваш логин" class="pasWor" required><br><br>
                        <input type="password" name="password" placeholder="Введите ваш пароль" class="pasWor" required><br><br>
                        <input type="submit" value="Вход" id="button3">
                    </form>
                </div>
            </div>
        </div>
    </header>