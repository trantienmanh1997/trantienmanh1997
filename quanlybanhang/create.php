<?php
include_once "connect.php" ;
if(count($_POST)>0){
    if(isset($_POST["ten_sanpham"]) && isset($_POST["gia"]) && isset($_POST["content"]) ){
        $ten_sanpham = $_POST["ten_sanpham"];
        $gia = $_POST["gia"];
        $content = $_POST["content"];
        $sql = "INSERT INTO products (ten_sanpham,gia,content) VALUES('$ten_sanpham','$gia','$content')";
        $connection->exec($sql);
        echo $sql;

        header('location:index.php');
        exit();
    }




}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class= "row">
            <div class="col-md-12">
                <form action="" method="post"  >
                   
                        <h1>Thêm sản phẩm mới</h1>
                        <label for="">Tên sản phẩm</label><br>
                        <input type="text" name="ten_sanpham" id=""><br>
                        <label for="">Giá</label><br>
                        <input type="text" name="gia" id=""><br>
                       <label for="">Ảnh sản phẩm</label><br>
                        <input type="file" name="fileToUpload" id="fileToUpload"><br>
                        <label for="">Chi tiết sản phẩm</label><br>
                       <textarea name="content" id="" cols="30" rows="10"></textarea><br>
                       <Button style="background-color:green; color: white" type="submit">Save</Button>
                       <Button type="reset">Reset</Button>
                
                   
                
                </form>
            
            </div>
        </div>
    
    
    
    </div>
</body>
</html>