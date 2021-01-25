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
echo"<pre>";
print_r($_SESSION);
echo"</pre>";

if(isset($_SESSION["action"]) && isset($_SESSION["infor"])){
  if($_SESSION["info"] ==1){
  echo"<div style='background-color:green;color:white'>Xóa thành công</div>";
}else{
  echo"<div style='background-color:green;color:red'>Xóa thất bại</div>";
}

}


?>


<div class="container">
  <h2>Danh sách điện thoại</h2>
  <form action="" method="get" name="search">
    <input type="text" name="keyword" value="<?php echo $keyword?>">
    <button>Tìm kiếm</button>
  </form>
  

  <table class="table">
    <thead>
      <tr>
        <th>Tên ĐT</th>
        <th>Hãng ĐT</th>
        <th>Màu sắc</th>
        <th>Giá điện thoại</th>
        <th>Mô tả</th>
        <th>Ngày đăng</th>
        <th>Trạng trái</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    
    <?php foreach($mobiles as $mobile){ ?>

        <tr>
        <td><?php echo $mobile["ten_dienthoai"]?></td>
        <td><?php echo $mobile["ten_hang"]?></td>
        <td><?php echo $mobile["mau_sac"]?></td>
        <td><?php echo $mobile["gia_dienthoai"]?></td>
        <td><?php echo $mobile["mo_ta"]?></td>
        <td><?php echo $mobile["ngay_dang"]?></td>
        <td>
        <?php if($mobile["trang_thai"]==1){
            echo "Hiện";
        }else{
            echo "Ẩn";
        }
        
        
        ?>
        </td>
        <td>
        <a href="javascript:void(0)"
        onclick="conFirmDelete('index.php?controller=dienthoai&action=deleteAction&id=<?php echo $mobile['ma_dienthoai'] ?>')"
        
        >Xóa</a>
                
        </td>
       
        
      </tr>


    <?php } ?>

      <script>
      
      function conFirmDelete(link){
        
        var r = confirm("Xác nhận xóa ?");
        if(r==true){
          window.location.href = link;
        }else{
        }

      }
      
      </script>
      
    </tbody>
  </table>
</div>
    
</body>
</html>