<?php
session_start();
 echo" Xin chào".$_SESSION["admin"]["Ten"] . "đã đăng nhập";
 if(!isset($_SESSION["admin"])){
    header("location:bai3.php");
    exit();
}



?>