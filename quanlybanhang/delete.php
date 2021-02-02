
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "connect.php";
    if(isset($_GET["id"]) && ($_GET["id"] >0)){
        $userId = (int)($_GET["id"]);
        $sql = "DELETE FROM products WHERE id=$userId";
         $connection->exec($sql);
        header('location:index.php');
        exit();
    }
    
    
    
    ?>
</body>
</html>