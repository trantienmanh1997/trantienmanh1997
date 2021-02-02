<?php
include_once "connect.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    
</head>
<body>
    
<?php
include_once "connect.php";

$sql = "SELECT * FROM products";

$stmt = $connection->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$datas = $stmt->fetchAll();

?>
<div class="container">
<div class="row"> 
    <div class="col-md-12">
  <h2>Danh sách sản phẩm</h2>
  <a href="create.php">Thêm sản phẩm</a>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Ảnh sản phẩm</th>
        <th>Content</th>
        <th>Ngày tạo</th>
        <th>Hành động</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
     <?php
     foreach($datas as $data){ ?>
     <tr>
        <td><?php echo $data["id"]?></td>
        <td><?php echo $data["ten_sanpham"]?></td>
        <td><?php echo $data["gia"]?></td>
        <td><?php echo $data["avatar"]?></td>
        <td><?php echo $data["content"]?></td>
        <td><?php echo $data["ngay_tao"]?></td>
        <td>
        <a href="edit.php?id=<?php echo $data["id"]?>">Sửa</a>
        <a onclick="conFirmDelete('delete.php')" href="delete.php?id=<?php echo $data['id']; ?>" >Xóa</a>
        </td>  
        </tr>

     
     
     <?php }  ?>
      
      
      </tr>
    
    </tbody>
  </table>
    </div>
  </div>
</div>
<script>
function conFirmDelete(link){
    var txt;
  var r = confirm("Bạn muốn xóa bản ghi này?");
  if (r == true) {
    window.location.href = link;
  } else {
   
  }
}


</script>

</body>
</html>

