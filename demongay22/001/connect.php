<?php
$servername = "127.0.0.1";
$username ="root";
$password = "";
$databasename = "eshop";
try{
    $connection = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password); 
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Kết nối thành công CSDL";

//tạo bảng
$sql = "CREATE TABLE products (

    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    
    product_name VARCHAR(255) NOT NULL,
    
    product_image VARCHAR(255) NOT NULL,
    
    product_intro VARCHAR(255),
    
    product_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
    ) ";

    $connection->exec($sql);

}catch(Exception $e){

    echo"Kết nối CSDL không thành công";

}





?>