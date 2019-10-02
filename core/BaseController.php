<?php
require_once 'Validations.php';
class BaseController extends Validations {

    public function __construct(){
        require_once ('BaseModel.php');
        foreach (glob('app/models/*php')as $file){// Recorre todos los archivos de la carpeta Model con la extensión PHP
            require_once ("$file");//incluye lo archivos encontrandos
        }
    }
    public function view($vista,$data=null){// Método que se encarga de redireccionar a una vista con un array datos.
        /*Recibe los datos del contolaror en forma de un array, lo recorre y crea una variable
       dinamica con el indice asociativo y le asigna el valor que almacena el indice,
       luego carga los helpers de la vista y carga la vista que llega como parametro.
        */
        if(is_null($data)){
            require_once ('views/modules/'.$vista.'.php');
        }else{
            foreach ($data as $id_assoc=>$value){
                ${$id_assoc}=$value;
            }
            require_once ('views/modules/'.$vista.'.php');
        }
    }

    public function redirect($controller=DEFAULT_CONTROLLER,$action=DEFAULT_ACTION){//Redirecciona a otra controlador y accion
        header('Location:'.BASE_URL.$controller.'/'.$action);
    }

    public function sendAjax($data){ // Se encarga de enviar los datos y cabeceras de una peticion AJAX
        header("Content-Type:application/json"); // Cabecera que indica el tipo de datos que recibe.
        echo json_encode($data); // Imprime los datos dentro de objetos JSON.
    }






}