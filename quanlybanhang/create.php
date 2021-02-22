<?php
include_once "connect.php" ;
$errorName = $errorPrice = $errorContent = "";

if(count($_POST)>0){
    if(!empty($_POST["ten_sanpham"]) && !empty($_POST["gia"]) && !empty($_POST["content"]) ){
        $ten_sanpham = $_POST["ten_sanpham"];
        $gia = $_POST["gia"];
        $content = $_POST["content"];
        $sql = "INSERT INTO products (ten_sanpham,gia,content) VALUES('$ten_sanpham','$gia','$content')";
        $connection->exec($sql);
        echo $sql;

        header('location:index.php');
        exit();
    } else {
        
        if(empty($_POST["ten_sanpham"])){
            $errorName="Vui lòng nhập tên sản phẩm";
        }else{
            $errorName="";
        }
    
        if(empty($_POST["gia"])){
            $errorPrice="Vui lòng nhập giá sản phẩm";
        }else{
            $errorPrice="";
        }
        if(empty($_POST["content"])){
            $errorContent = "Vui lòng nhập chi tiết sản phẩm";
        }else{
            $errorContent = "";
        }
       
       
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
                <form action="" method="post" enctype="multipart/form-data" >
                   
                        <h1>Thêm sản phẩm mới</h1>
                        <label for="">Tên sản phẩm</label><br>
                        <input type="text" name="ten_sanpham" id=""><br>
                        <span style="color:red"><?php echo $errorName?></span><br>
                        <label for="">Giá</label><br>
                        <input type="text" name="gia" id=""><br>
                        <span style="color:red"><?php echo $errorPrice?></span><br>
                       <label for="">Ảnh sản phẩm</label><br>
                        <input type="file" name="fileToUpload" id="fileToUpload"><br>
                        <label for="">Chi tiết sản phẩm</label><br>
                       <textarea name="content" id="" cols="30" rows="10"></textarea><br>
                       <span style="color:red"><?php echo $errorContent?></span><br>
                       <Button name='submit' style="background-color:green; color: white" type="submit">Save</Button>
                       <Button type="reset">Reset</Button>
                </form>
            
            </div>
        </div>
    
    
    
    </div>
</body>
</html>