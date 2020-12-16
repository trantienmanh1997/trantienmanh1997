

<?php
$servername = "127.0.0.1";
$username ="root";
$password = "";
$databasename = "eshop1";
try{
    $connection = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password); 
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//tạo bảng


}catch(Exception $e){

    echo"Kết nối CSDL không thành công";
    die;

}





?>