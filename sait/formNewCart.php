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
            
            <h4>Administrator</h5> 
           <a href="../index.php">Выйти</a>
                
            </div>
        </div>
    </header>

    <main>
        <form action="../php/newCartInTable.php" class="newCartGood" method="post">
            <input type="text" name="category" placeholder="Категория продукта"><br>
            <input type="text" name="title" placeholder="Наименование продукта"><br>
            <input type="text" name="description" placeholder="Описание продукта"><br>
            <input type="text" name="coin" placeholder="Цена продукта"><br>
            <input type="file" name="image"><br>
            <div class="mx-auto" style="width: 190px;">
            <button class="btn btn-primary">Добавить новый товар</и>
        </div>
        </form>
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