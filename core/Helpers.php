<?php

class Helpers{//clases donde se añaden metodos que se necesiten en la vista

    public static function url($controller=DEFAULT_CONTROLLER,$action=DEFAULT_ACTION){//Pinta la url para la redirreciones
        $urlString=BASE_URL.$controller.'/'.$action;
         return  $urlString;
    }

    //verifica si hay un error en la validacion
    public static function isError($_name){
        if(isset($_SESSION[$_name])){
            return true;
        }else{
            return false;
        }
    }
    //muestra el mensaje de error en una session y luego lo borra
    public static function messageError($_name){
            if(isset($_SESSION[$_name])){
                $message=$_SESSION[$_name];
                $_SESSION[$_name]=null;
                unset($_SESSION[$_name]);
            }

            return $message;
        }

    }


