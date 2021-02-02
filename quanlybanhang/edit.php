<?php
 include_once "connect.php";


 if(count($_POST)>0){
    if(isset($_POST["ten_sanpham"]) && isset($_POST["gia"]) && isset($_POST["content"])){
        $ten_sanpham = $_POST["ten_sanpham"];
        $gia = $_POST["gia"];
        $content = $_POST["content"];
        $id = $_POST["id"];
        $sql = "UPDATE products SET ten_sanpham = '$ten_sanpham', gia = '$gia', content = '$content'
        WHERE id = $id ";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        header('location:index.php');
        exit();
        
   
    }
}
if(isset($_GET["id"]) && ($_GET["id"] >0)){
    $userId = (int)$_GET["id"];
    $sql = "SELECT * FROM products WHERE id =$userId ";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    $data = isset($data[0]) ? $data[0] : null;
    echo"<pre>";
    print_r($data);
    echo"</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class= "row">
            <div class="col-md-12">
                <form action="" method="post"  >
                        <div>
                            <label for="">ID:<?php echo $data["id"]?></label>
                            <input type="hidden" name="id" value="<?php echo $data["id"]?>">
                        
                        </div>
                        <h1>Sửa sản phẩm</h1>
                        <label for="">Tên sản phẩm</label><br>
                        <input type="text" name="ten_sanpham" id="" value="<?php echo $data["ten_sanpham"]?>"><br>
                        <label for="">Giá</label><br>
                        <input type="text" name="gia" id="" value="<?php echo $data["gia"]?>"?><br>
                        <label for="">Ảnh sản phẩm</label><br>
                        <input type="file" name="fileToUpload" id="fileToUpload"><br>
                        <label for="">Chi tiết sản phẩm</label><br>
                        <textarea name="content" id="" cols="30" rows="10" > <?php echo $data["content"]?> </textarea><br>
                        <Button style="background-color:green; color: white" type="submit">Save</Button>
                        <Button type="reset">Reset</Button>
               
                </form>
            
            </div>
        </div>
    
    
    
</div>
</body>
</html>