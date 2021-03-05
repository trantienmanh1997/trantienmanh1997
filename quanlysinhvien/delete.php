<?php
include_once "connect.php";

if(isset($_GET["id"]) && ($_GET["id"] >0)){
$userId = (int) $_GET["id"];
$sql = "DELETE FROM students WHERE id = $userId";
$connection->exec($sql);
header('location:index.php');
exit();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>