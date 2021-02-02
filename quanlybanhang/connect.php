  
<?php

// ip của máy chủ
// trên môi trường vd : 192.268.7.2
// trên localhost xampp 127.0.0.1
$servername = "127.0.0.1";
// username xampp mặc định root
$usernameMysql = "root";
// mật khẩu kết nối đến CSDL
// trên xampp mặc định mật khẩu là rỗng
$passwordMysql = "";
// tên CSDL mà chúng ta muốn kết nối
$databaseName = "quanlybanhang";

try {

    $connection = new PDO("mysql:host=$servername;dbname=$databaseName", $usernameMysql, $passwordMysql);


    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
}catch (Exception $e) {

   
}


