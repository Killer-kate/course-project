<?php
session_start();
    $mysql = new mysqli("localhost", "mysql", "mysql", "panda");
    
    $login = $mysql->real_escape_string($_POST["login"]);
    $password = $mysql->real_escape_string($_POST["password"]);
    $passwords = md5($password);
    $zapros = $mysql->query("SELECT * FROM `users` WHERE login = '$login' AND password = '$passwords'");
   
    if(!$zapros){// не подключились к бд
        header("Location: ../index.php");
        exit();
}else{// если нашли пароль
    if($zapros->num_rows == 1){
        $niks = $zapros->fetch_assoc();
$name = $niks['name'];
$_SESSION["name"] = $name;
if($name === "Admi"){
    header("Location: ../sait/admi.php");
}else{
header("HTTP/1.1 301 Moved Permanently");
header("Location: ../sait/pol.php");
exit();
}

       
    }else{// если ошибка в логине или пароле
        header("Location: ../sait/contact.php");
        exit();
    }
}
   ?>

    
