<?php
$mysql_connect = new mysqli('localhost', 'mysql', 'mysql', 'panda');
    $id = $_GET['id'];
    $tovar = $mysql_connect->query("SELECT * FROM `cartgoods` WHERE `id` = '$id'");
    $tovs = mysqli_fetch_array($tovar);
?>

<h2>Подтвердите удаление данной строки</h2>
<form action="recom_delete.php" method="post">
    <input type="text" name="id" id="id" value="<?=$tovs['id'];?>" readonly>
    <input type="text" name="category" id="category" value="<?=$tovs['category'];?>">
    <input type="text" name="title" id="title" value="<?=$tovs['title'];?>">
    <input type="text" name="description" id="description" value="<?=$tovs['description'];?>">
    <input type="text" name="price" id="price" value="<?=$tovs['price'];?>">
    <button>Удалить</button>
</form>