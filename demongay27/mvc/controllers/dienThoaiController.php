<?php
class dienThoaiController{

    public function indexAction(){

        $keyword = "";
        if(isset($_GET["keyword"]) && strlen($_GET["keyword"])>0){
            $keyword = $_GET["keyword"];
        }
     
        $model = new dienThoaiModel();
        $mobiles = $model->listData($keyword);

       

        
      
        

        include_once "mvc/views/dienthoai/index.php";
    }
    public function deleteAction(){
       
        $id = isset($_GET["id"])? (int)$_GET["id"] : 0;
        if($id >0){
        $model = new dienThoaiModel();
        $result = $model->delete($id);
        }
        $_SESSION["info"] = $result;
        $_SESSION["action"] = "delete";

    
    header("location:index.php?controller=dienthoai&action=indexAction");
    exit();
    }
}




?>