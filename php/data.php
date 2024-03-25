<?php
$host = 'localhost';
$user = 'mysql';
$pass = 'mysql';
$bd = 'panda';
$table_goods = 'cartGoods';


$mysql_connect = new mysqli($host, $user, $pass, $bd);

if($mysql_connect->connect_error){
   die('Fail:'.$mysql_connect->connect_error);
}

// Goods
$sql = "SELECT * FROM `$table_goods`";
$result = $mysql_connect->query($sql);
generateFile($result, "../data/goods-data.json", "../data/goods-data.json");

// Functions
function generateFile($result, $file_name, $file_url){
   $resultArray = [];
   $i = 0;
   while ($result->fetch_assoc()){
      $result->data_seek($i);
      $resultArray[] = $result->fetch_assoc();
      $i++;
   }
   $resultJson = json_encode($resultArray);
   $json = fopen($file_name, "w");
   fwrite($json, $resultJson);
   fclose($json);
   rename($file_name, $file_url);
}

$mysql_connect->close();
?>