<?php
include_once"../../define.php";
include_once"../../lib/connect.php";
var_dump($connection);

$sql = "SELECT * FROM users ";
$stmt = $connection->prepare($sql); // prepare : chuẩn bị thực hiện câu lệnh sql
$stmt->execute(); // execute: thực hiện câu lệnh sql
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);//đặt chế độ lấy dl ra từ biến $stmt
$users = $stmt->fetchAll(); // lấy tất cả các bản ghi theo câu sql từ $stmt đã đc setFetchMode

echo"<pre>";
print_r($users);
echo"</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Admin - Quản trị Người Dùng</h2>   
  <div>
    <a href="<?php echo DOMAIN_SITE."/admin/users/create.php"?>" class="btn btn-info">Thêm người dùng</a>
  </div>
  <div class="col-md-12">   
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Ảnh</th>
        <th>Sinh Nhật</th>
        <th>Hành Động</th>
      </tr>
    </thead>
    <tbody>
    <?php
    if(is_array($users) && !empty($users)){
        foreach($users as $user){
            ?>
            <tr>
                <td><?php echo $user["ID"]?> </td>
                <td><?php echo $user["username"]?> </td>
                <td><?php echo $user["user_avatar"]?> </td>
                <td><?php echo $user["user_birth"]?> </td>
                <td>
                    <a href="" class ="btn btn-warning">Sửa</a>
                    <a href="" class ="btn btn-danger">Xóa</a>
                
                </td>
            </tr>
   
            <?php
        }

    }
    
    ?>
      
    </tbody>
  </table>
  </div>
</div>

</body>
</html>