<?php
include_once "connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<?php

 $sql = "SELECT * FROM students";

 $stmt = $connection->prepare($sql);
 $stmt->execute();
 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
 $datas = $stmt->fetchAll();

?>
<div class ="container">
<h1>Danh sách sinh viên</h1>
<a href="create.php">Thêm sinh viên</a>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th >Name</th>
      <th>Age</th>
      <th >Avatar</th>
      <th >Content</th>
      <th >Created_At</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      foreach ($datas as $data){ ?>
      <tr></tr>
       <td><?php echo $data["id"]?></td>
       <td><?php echo $data["namesv"]?></td>
       <td><?php echo $data["age"]?></td>
       <td><?php echo $data["avatar"]?></td>
       <td><?php echo $data["content"]?></td>
       <td><?php echo $data["ngay_tao"]?></td>
        <td>
        <a href="edit.php?id=<?php echo $data["id"]?>">Sửa</a>
        <a onclick = "confirmDelete('delelte.php')"  href="delete.php?id=<?php echo $data["id"]?>">Xóa</a>
        </td>
        </tr>



     <?php } ?>
    </tr>
   
  </tbody>
</table>

</div>
<script>
function confirmDelete(link){
    var txt;
  var r = confirm("Bạn chắc chắn muốn xóa");
  if (r == true) {
    window.location.href=link
  } else {
    
  }

}

</script>
</body>
</html>