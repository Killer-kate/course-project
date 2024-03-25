<?php
session_start();
$mysql_connect = new mysqli('localhost', 'mysql', 'mysql', 'panda');
$id = $_POST['id'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$_SESSION["name"] = "Administrator";
$result = $mysql_connect->query("DELETE FROM `cartgoods` WHERE `id` = '$id'");
include("../sait/admi.php");
?>