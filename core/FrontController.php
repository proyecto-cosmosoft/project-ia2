<?php


class FrontController{

    public function loadController($_controller){
        $nameController=$_controller;
        $controller=ucwords($nameController)."Controller";

        if(class_exists($controller)){
            $objController= new $controller();
        }else{
            $objController=new ErrorController();
        }
        return $objController;
    }

    public function loadAction($objController,$_action){
        $action=$_action;
        $objController->$action();
    }


    public function setAction($objController){
        if(isset($_GET["action"])&&method_exists($objController,$_GET['action'])){
            $this->loadAction($objController,$_GET['action']);
        }else{
            $this->loadAction($objController,'index');
        }
    }






}