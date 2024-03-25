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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Администратор</title>
</head>
<body style=" background-image: url(../image/fon3.jpg); display:block; margin:0 auto;">
    <header>
        <div class="head">
            <div class="logoName">
                <img src="../image/Фон.png" alt="Логотип">
                <h1>Пандочка</h1>
            </div>
            <nav>
                <a href="admi.php">Список товаров</a>
                <a href="orders.php">Заказы</a>
            </nav>
            <div style="margin:30px 80px 0 0">
            
              <?php
                if (isset($_SESSION["name"])) {
                    echo  $_SESSION["name"];
                    unset($_SESSION["name"]);
                }
                ?>  
           <a href="../index.php">Выйти</a>
                
            </div>
        </div>
    </header>
    <main>
        <br><br>
        <table class="table table-light table-hover" method="post" style="cursor:pointer; width:70%; margin:0 auto;" border="1">
            <thead class="table table-success">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Пользователь</th>
                    <th scope="col">Название</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Цена</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mysql_connect = new mysqli('localhost', 'mysql', 'mysql', 'panda');
                $arr = mysqli_query($mysql_connect, "SELECT * FROM `basket`");
                $arr = mysqli_fetch_all($arr);
                foreach ($arr as &$value) {
                ?>
                    <div>
                        <tr>
                            <th scope="row" name="id"><?= $value[0] ?></th>
                            <td name="category"><?= $value[1] ?></td>
                            <td name="image"><?= $value[2] ?></td>
                            <td name="title"><?= $value[3] ?></td>
                            <td name="description"><?= $value[4] ?></td>
                            <td name="price"><?= $value[5] ?></td>
                        </tr>
                    </div>
                <?
                }
                ?>

                </div><!-- form -->
            </tbody>
        </table>
        <br><br>
        </main>
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