<?php
//PDO SQL連線指令
$dsn="mysql:host=localhost;dbname=expstore;charset=utf8";
$user="yww";
$password="1234";
$link=new PDO($dsn,$user,$password);
date_default_timezone_set("Asia/Taipei");//資料寫入的時區
?>
