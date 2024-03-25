<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <title>Контакты</title>
</head>
<body>
    <!--Шапка сайта-->
    <header>
        <div class="head">
            <div class="logoName">
                <img src="../image/Фон.png" alt="Логотип">
                <h1>Пандочка</h1>
            </div>
            <div class="flexBur">
                <div class="nav">
                    <img src="../image/burger.png" alt="menu" class="imageMenu" id="imageMenu">
                </div>
                <div id="burgerMenu">
                    <a href="../index.php" class="aMenu">Главная</a>
                    <a href="katalog.php" class="aMenu">Каталог</a>
                    <a href="contact.html" class="aMenu">Контакты</a>
                    <a href="basket.php" class="aMenu">Корзина</a>
                </div>
            </div>
            <nav>
                <a href="../index.php">Главная</a>
                <a href="katalog.php">Каталог</a>
                <a href="contact.php">Контакты</a>
                <a href="basket.php">Корзина</a>
            </nav>
            <div class="nikis1">
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
                        <input type="text" name="login" placeholder="Введите ваш логин" required class="logIn"
                            id="logiN"><br><br>
                        <input type="text" name="password" placeholder="Введите ваш пароль" required
                            class="pasWor"><br><br>
                        <input type="submit" value="Вход" id="button2">
                    </form>
                </div>
                <div class="window">
                    <form action="../php/dataVerification.php" method="post">
                        <input type="text" name="name" placeholder="Введите ваше имя" class="logIn" required><br><br>
                        <input type="email" name="email" placeholder="Введите ваш email" class="pasWor"
                            required><br><br>
                        <input type="text" name="login" placeholder="Введите ваш логин" class="pasWor" required><br><br>
                        <input type="password" name="password" placeholder="Введите ваш пароль" class="pasWor"
                            required><br><br>
                        <input type="submit" value="Вход" id="button3">
                    </form>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="backgroundContact">
            <h2 class="contactH">Контакты</h2>
            <div class="flexContact">
                <div class="flexTopContact">
                    <div class="contact1">
                        <img src="../image/contact1.jpg" alt="Город" width="250" height="150">
                        <p>Москва</p>
                    </div>
                    <div class="contact2">
                        <img src="../image/contact2.jpg" alt="Город" width="250" height="150">
                        <p>Беларусь</p>
                    </div>
                    <div class="contact3">
                        <img src="../image/contact3.jpg" alt="Город" width="250" height="150">
                        <p>Санкт-Петербург</p>
                    </div>
                </div>
                <div class="flexBottomContact">
                    <div>
                        <h3>Горячая линия</h3>
                        <p>8 (800)555-35-35</p>

                    </div>
                    <p id="contactHelp">Если у вас возникли вопросы или какие то проблемы с заказом позвоните по этому
                        телефону и мы поможем решить вашу проблему. А так же вы можете узнать статус вашего заказа,
                        отменить или изменить его.</p>
                </div>
            </div>

            <div class="pop-upBlock" style="display:none">
                <div class="pop-upcontayner1" style="display:none">
                    <div class="image">
                        <img src="../image/contact1.jpg" alt="Город" width="250" height="150">
                        <p>Москва</p>
                    </div>
                    <div class="text">
                        <h3>Центральный офис в Москве</h3>
                        <p>Россия, Москва, Варсонофьевский переулок, 5с1</p>
                        <ul>
                            <li><iframe style="float:right; margin-right:20px; border:none;"
                                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Af645902437aece00cded91d92f928e2a57a907d845184d08687506d234278ae0&amp;source=constructor"
                                    width="340" height="240"></iframe>
                            </li>
                            <li>Email : pandochka@mail.ru</li>
                            <li>Телефон : 8(800)555-35-35</li>
                            <li>Факс : 8(800)555-45-12</li>

                        </ul>
                    </div>
                    <p class="closer">X</p>
                </div>

                <div class="pop-upcontayner2" style="display:none">
                    <div class="image">
                        <img src="../image/contact2.jpg" alt="Город" width="250" height="150">
                        <p>Беларусь</p>
                    </div>
                    <div class="text">
                        <h3>Центральный офис в Беларуси</h3>
                        <p>Беларусь, Минск, улица Артиллеристов, 12</p>
                        <ul>
                            <li><iframe style="float:right; margin-right:20px; border:none;"
                                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A97a1d8c837e940cee42566a471c9ec7063bc81211e0937561e5513d8395fa81a&amp;source=constructor"
                                    width="340" height="240"></iframe>
                            </li>
                            <li>Email : pandochka@mail.ru</li>
                            <li>Телефон : 8(800)535-35-35</li>
                            <li>Факс : 8(800)535-45-12</li>
                        </ul>
                    </div>
                    <p class="closer2">X</p>
                </div>

                <div class="pop-upcontayner3" style="display:none">
                    <div class="image">
                        <img src="../image/contact2.jpg" alt="Город" width="250" height="150">
                        <p>Санкт-Петербург</p>
                    </div>
                    <div class="text">
                        <h3>Центральный офис в Санкт-Петербурге</h3>
                        <p>Россия, Санкт-Петербург, улица Рубинштейна, 23 </p>
                        <ul>
                            <li><iframe style="float:right; margin-right:20px;border:none;"
                                    src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab1ab523d9c0c293c67c6f8b687db67eb8547fa8e5b2604c34aa5d173464f5c31&amp;source=constructor"
                                    width="340" height="240"></iframe>
                            </li>
                            <li>Email : pandochka@mail.ru</li>
                            <li>Телефон : 8(800)556-14-35</li>
                            <li>Факс : 8(800)556-89-12</li>
                        </ul>
                    </div>
                    <p class="closer3">X</p>
                </div>
            </div>
        </div>



    </main>
    <!--Подвал сайта-->
    <footer>
        <div class="logoName">
            <img src="../image/Фон.png" alt="Логотип">
            <h1>Пандочка</h1>
        </div>

        <p>Copyrited 2021 </p>
    </footer>
    <script src="../script/contact.js"></script>
    <script src="../script/form.js"></script>
</body>

</html>