<?php
class Router{
    public function run(){
      
    
        $controllerDefault = "dienthoai";
        $controllerRequest = isset($_REQUEST["controller"]) ? $_REQUEST["controller"] : $controllerDefault;
        $controllerRequest = $controllerRequest."Controller";
        $controller = new $controllerRequest();
    $actionDefault = "indexAction";
    $actionRequest = isset($_GET["action"]) ? $_GET["action"] : $actionDefault;
    // var_dump($actionRequest); exit;
    $controller->$actionRequest();
    }

}



?>