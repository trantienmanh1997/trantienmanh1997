<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(isset($_POST) && !empty($_POST)){
        if (!isset($_POST["Ten"]) || empty($_POST["Ten"]) || !isset($_POST["Tuoi"]) || empty($_POST["Tuoi"]) || !isset($_POST["lienhe"]) || empty($_POST["lienhe"])){
            echo "<p style='color:red'>Không được để trống </p>";
        }else{
            $ten = $_POST["Ten"];
            $tuoi = $_POST["Tuoi"];
            $lienHe = $_POST["lienhe"];


            $_SESSION["ten"] = $_POST["Ten"];;
            $_SESSION["tuoi"] = $_POST["Tuoi"];
            $_SESSION["lienHe"] = $_POST["lienhe"];

        }if(empty($error)){
                $_SESSION["admin"] = $_POST;
                header("location:index.php");
                exit();
        }


    }
    echo"<pre>";
    print_r ($_POST);
    echo"</pre>";
    
    
    ?>
    <form action="index.php" method ="post">
<table>
    <tr>
        <th style='text-align:left'>
            Thông tin liên hệ
        </th>
    </tr>
    <tr>
        <td>
            <p>Họ tên(*)</p>
        </td>
        <td>
        <input type="text" name="Ten" >
        </td>
    
    </tr>
    <tr>
        <td>
            <p>Tuổi(*)</p>
        </td>
        <td>
            <input type="text" name="Tuoi" >
        </td>
    
    </tr>
    <tr>
        <td>
            <p>Nội dung liên hệ(*)</p>
        </td>
        <td>
        <textarea name="lienhe" id="" cols="30" rows="10"></textarea>
        
        </td>
    
    </tr>
    <tr>
        <td>
        <button type="submit" id="submit" name="GuiThongTin">Gửi thông tin</button>
							
        </td>
    
        <td>
        <button type="reset">Nhập lại</button>
        </td>
    </tr>


</table>



    </form>
</body>
</html>