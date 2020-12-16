<?php
include_once"../../define.php";
include_once"../../lib/connect.php";
if(count($_POST)>0){
    if(isset($_POST["username"]) && isset($_POST["user_avatar"]) && (strlen($_POST["username"]) >0) && (strlen($_POST["user_avatar"])>0 )){

        $username = $_POST["username"];
        $user_avatar = $_POST["user_avatar"];
        $sql = "INSERT INTO users (username, user_avatar)
        VALUES ('$username','$user_avatar')";
        $response = $connection ->exec($sql);
        if($response ==1){
            
            echo"<div style='color:green'>Đã thêm dữ liệu thành công</div>";
    
        }else{
    
            echo"<div style='color:red'>Thêm dữ liệu thất bại</div>";
    
        }
        
        
    }else{
        echo"<div style='color:red'>Dữ liệu không hợp lệ</div>";
    
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
        <div class="row">
            <div class="col-md-12">
                <form action="" name="usersubmit" method ="post">
                    <div class="form-group">
                        <label for="">UserName</label>
                        <input type="text" name="username" class="form-control" placeholder="Nhập tên " >
                    </div>
                    <div class="form-group">
                        <label for="">Image:</label>
                        <input type="text" name="user_avatar" class="form-control" placeholder="Nhập Ảnh" >
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm người dùng</button>
                </form>
            
            </div>

        </div>
    
    </div>
</body>
</html>