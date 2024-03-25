<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Панда</title>
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
                    <img src="../image/burger.png" alt="menu" class="imageMenu" id="imageMenu">

                </div>
                <div id="burgerMenu">
                    <a href="../index.php" class="aMenu">Главная</a>
                    <a href="katalog.php" class="aMenu">Каталог</a>
                    <a href="contact.html" class="aMenu">Контакты</a>
                </div>
            </div>

            <nav>
                <a href="../index.php">Главная</a>
                <a href="katalog.php">Каталог</a>
                <a href="contact.html">Контакты</a>
            </nav>
            <div class="nikis">
                <?php
                if ($_SESSION['name']) {
                    echo '<p class="user">' . $_SESSION['name'] . '</p>';
                    echo '<form action="../php/vx.php"><input class="bt" type="submit" value="Выйти"></form>';
                } else {
                    echo '<button class="submitHead" id="avt">Войти</button>';
                }
                ?>
            </div>




        </div>
    </header>
    <main id="basketcontent">

        <?php
        $mysql = new mysqli("localhost", "mysql", "mysql", "panda");
        $name = $_SESSION['name'];

        $basket = mysqli_query($mysql, "SELECT * FROM `basket` WHERE name = '$name' AND status = 'Корзина'");
        $basket = mysqli_fetch_all($basket);
        if ($basket) {
        ?>
            <table class="table" style="width:700px; margin:0 auto; margin-top:40px;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Цена</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?
                    foreach ($basket as &$values) {
                    ?>

                        <tr>
                            <form action="../deleted/deleteCard.php" method="post">
                            <th scope="row"><input name="id" style="border:none; background-color:#edf8b6; width:20px;" value="<?=$values[0]?>"></th>
                            <td><?=$values[3]?></td>
                            <td><?=$values[4]?></td>
                            <td><?=$values[5]?></td>
                            <td>
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                            </td>
                        </tr>
                        <? }
                    ?>
                </tbody>
            </table>
            <div class="mx-auto" style="width:150px; margin-top:40px; margin-bottom:40px;">
        <form action ="../php/orderPol.php" method="post">
            <button type="submit" class="btn btn-primary">Оформить заказ</button>
        </form>
        </div>
        <?
        } else {
            echo '<p>В корзине пока нет товаров</p>';
        }
        ?>
        
    </main>
    <!--Подвал сайта-->
    <footer>
        <div class="logoName">
            <img src="../image/Фон.png" alt="Логотип">
            <h1>Пандочка</h1>
        </div>
        <p>Copyrited 2021 </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>