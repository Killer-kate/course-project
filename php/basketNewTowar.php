<?php
session_start();
$name=$_SESSION['name'];
$title = $_POST['title'];
$description = $_POST['description'];
$coin = $_POST['coin'];
$status = "Корзина";
$code = $_POST['code'];
$num = 1;
    $mysql = new mysqli("localhost", "mysql", "mysql", "panda");
    $mysql->query("INSERT INTO `basket` (`id`, `name`, `product_code`, `title`, `description`, `coin`, `status`, `count`) VALUES (NULL, '$name', '$code', '$title', '$description', '$coin', '$status', '$num')");
    header('Location: ../sait/katalog.php');
?>