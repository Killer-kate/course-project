<?php

$mysql = new mysqli("localhost", "mysql", "mysql", "panda");

$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$coin = $_POST['coin'];
$image = "../image/tovar/" . $_POST['image'];

$mysql->query("INSERT INTO `cartgoods` (`id`, `category`, `image`, `title`, `description`, `price`) VALUES (NULL, '$category', '$image', '$title', '$description', '$coin')");
echo "
    <img src='$image' alt=' тут она правда есть'>
    "
?>