<?php
session_start();
?>
<?php 
   require "../php/data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <title>Каталог</title>
</head>

<body style=" background-image: url(../image/fon3.jpg);">
    <!--Шапка сайта-->
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
                <a href="index.php" class="aMenu" >Главная</a>
                <a href="katalog.php" class="aMenu" >Каталог</a>
                <a href="contact.html" class="aMenu" >Контакты</a>
                <a href="basket.php" class="aMenu" >Корзина</a>
                </div>  
            </div>
            <nav>
                <a href="../index.php">Главная</a>
                <a href="katalog.php">Каталог</a>
                <a href="contact.php">Контакты</a>
                <a href="basket.php">Корзина</a>
            </nav>
                
            <div id="nikName" class="nikis1">
            <?php
                if($_SESSION['name']){
                    echo '<p class="user">'.$_SESSION['name'].'</p>';
                    echo '<form action="../php/vx.php"><input class="bt" type="submit" value="Выйти"></form>';
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
                    <form action="../php/autorisationConnect.php" method="post">
                        <input type="text" name="login" placeholder="Введите ваш логин" required class="logIn" id="logiN"><br><br>
                        <input type="text" name="password" placeholder="Введите ваш пароль" required class="pasWor"><br><br>
                        <input type="submit" value="Вход" id="button2">
                    </form>
                </div>
                <div class="window">
                    <form action="../php/dataVerification.php" method="post">
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
    <main style="height:auto;">
        <div class="katalogNavigate">
            <a href="#" id="allProducts">Все товары</a>
            <a href="#" id="cup">Кружки</a>
            <a href="#" id="trinket">Брелки</a>
            <a href="#" id="copybook">Тетради</a>
            <a href="#" id="linen">Постельное белье</a>
            <a href="#" id="coinBox">Копилки</a>
        </div>
        <div class="menuCatalogs">
        </div>   
    </main>
    <footer>
        <div class="logoName">
            <img src="../image/Фон.png" alt="Логотип">
            <h1>Пандочка</h1>
        </div>
        <p>Copyrited 2021 </p>
    </footer>
    <script src="../script/script-catalog.js"></script>
    <script src="../script/form.js"></script>
</body>
</html>