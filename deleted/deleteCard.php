<?php
$mysql = new mysqli('localhost', 'mysql', 'mysql', 'panda');

$id = $_POST["id"];

$mysql->query("DELETE FROM `basket` WHERE `id` = '$id'");

header('Location: ../sait/basket.php');


?>