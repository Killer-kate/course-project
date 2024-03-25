<?php
session_start();
$mysql = new mysqli('localhost', 'mysql', 'mysql', 'panda');
$login = $mysql->real_escape_string($_POST['login']);
$name = $mysql->real_escape_string($_POST['name']);
$password = $mysql->real_escape_string($_POST['password']);
$email = $mysql->real_escape_string($_POST['email']);
$_SESSION["name"] = $name;


if($password != ''){
    $passwords = md5($password);
    $mysql->query("INSERT INTO `users`(`id`, `email`, `name`, `login`, `password`) VALUES (NULL, '$email', '$name', '$login', '$passwords')");
    header("HTTP/1.1 301 Moved Permanently");
    $_SESSION["name"] = $name;
    header("Location: ../sait/pol.php");
    $mysql->close;
    } else{
    echo "Неверный формат пароля";
    }

?>