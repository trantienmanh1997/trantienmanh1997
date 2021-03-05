<?php
include_once "connect.php";


if(count($_POST) > 0){
    if(isset($_POST["namesv"]) && isset($_POST["age"]) && isset($_POST["content"])) {
        $namesv = $_POST["namesv"];
        $age = $_POST["age"];
        $content = $_POST["content"];
        $id = $_POST["id"];
        $sql = "UPDATE students SET namesv = '$namesv',age = '$age', content = '$content' WHERE id = $id";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        header('location:index.php');
        exit();

    }

}
if(isset($_GET["id"]) && ($_GET["id"] >0)){
    $userId = (int) $_GET["id"];
    $sql = "SELECT * FROM students WHERE id = $userId";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();
    $data = isset($data[0]) ? $data[0] :null;


    echo "<pre>";
    print_r($data);
    echo "</pre>";

}







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class= "row">
            <div class="col-md-12">
                <form action="" method="post">
                        <div>
                            <label for="">ID:<?php echo $userId?></label>
                            <input type="hidden" name="id" value="<?php echo $data["id"]?>">
                        
                        </div>
                   
                        <h1>Sửa thông tin sinh viên</h1>
                        <label for="">Name</label><br>
                        <input type="text" name="namesv" id="" value="<?php echo $data["namesv"]?>"><br>
                      
                        <label for="">Age</label><br>
                        <input type="text" name="age" id="" value="<?php echo $data["age"]?>" ><br>
                        
                       <label for="">Avatar</label><br>
                        <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                        <label for="">Content</label><br>
                       <textarea name="content" id="" cols="30" rows="10"> <?php echo $data["content"]?>" </textarea>
                     
                       <Button name='submit' style="background-color:green; color: white" type="submit">Save</Button>
                       <Button type="reset">Reset</Button>
                </form>
            
            </div>
        </div>
    
    
    
    </div>
</body>
</html>