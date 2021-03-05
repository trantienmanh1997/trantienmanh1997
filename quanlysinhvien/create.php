<?php
include_once "connect.php";
$errorName = $errorAge = $errorContent = "";
if(count($_POST)>0){
    if(!empty($_POST["namesv"]) && !empty($_POST["age"]) && !empty($_POST["content"])) {
        $namesv = $_POST["namesv"];
        $age = $_POST["age"];
       
        $content = $_POST["content"];
        
        $sql = "INSERT INTO students(namesv,age,content) VALUES('$namesv','$age','$content')";
         $connection->exec($sql);
         echo $sql;
         header('location:index.php');
         exit();
    }
    else{
        if(empty($_POST["namesv"])){
            $errorName = "Vui lòng điền tên";
        }else{
            $errorName = "";
        }
        if(empty($_POST["age"])){
            $errorAge = "Vui lòng điền tuổi";
        }else{
            $errorAge = "";
        }
        if(empty($_POST["content"])){
            $errorContent = "Vui lòng điền thông tin chi tiết";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>


<div class="container">
        <div class= "row">
            <div class="col-md-12">
                <form action="" method="post">
                   
                        <h1>Thêm sinh viên mới</h1>
                        <label for="">Name</label><br>
                        <input type="text" name="namesv" id="">
                        <span style="color:red"><?php echo $errorName?></span><br>
                        <label for="">Age</label><br>
                        <input type="text" name="age" id="">
                        <span style="color:red"><?php echo $errorAge?></span><br>
                       <label for="">Avatar</label><br>
                        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                        <label for="">Content</label><br>
                       <textarea name="content" id="" cols="30" rows="10"></textarea>
                       <span style="color:red"><?php echo $errorContent?></span><br>
                       <Button name='submit' style="background-color:green; color: white" type="submit">Save</Button>
                       <Button type="reset">Reset</Button>
                </form>
            
            </div>
        </div>
    
    
    
    </div>
</body>
</html>