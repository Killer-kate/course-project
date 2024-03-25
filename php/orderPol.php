<?php
session_start();

$mysql = new mysqli("localhost", "mysql", "mysql", "panda");

$name = $_SESSION['name'];

$basket = mysqli_query($mysql, "SELECT id FROM `basket` WHERE name = '$name' AND status = 'Корзина'");
$basket = mysqli_fetch_all($basket);

foreach($basket as &$value){
    $a = $value[0];
    $mysql->query("UPDATE `basket` SET `status` = 'Оформлено' WHERE `basket`.`id` = $a");
}
header('Location: ../sait/basket.php');

?>