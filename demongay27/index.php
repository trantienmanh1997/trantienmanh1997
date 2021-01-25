<?php
session_start();
include_once "class/db.php";
include_once "mvc/models/dienThoaiModel.php";
include_once "mvc/models/hangDienThoaiModel.php";
include_once "mvc/controllers/dienThoaiController.php";
include_once "mvc/route.php";





$route = new Router();
$route->run();

?>