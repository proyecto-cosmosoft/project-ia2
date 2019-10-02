<?php



class ExampleController extends BaseController {
    public function __construct(){
        parent::__construct();
    }


    public function index(){//las clases controlador tienen que poseer su metodo index
        $example=new Example();//no hace falta incluir el modelo ya esta incluido
        $exampleArray=$example->getAll();
        //ESTE METODO INCLUYE UNA VISTA
        $this->view('Example/home',['exampleArray'=>$exampleArray]);
    }

    public function registrar(){

        /*OJO:EL METODO INPUT SOLO FUNCIONA PARA DATOS ENVIADOS POR POST*/

        /*parametros del metodo input:
        *nomnbre del campo,
        *si es requerido o no (true,false)
        *tipo del campo -actualmente valida (string,int,date,email)*/

        $nombre=$this->input('nombre',true,'string');

        $descripcion=$this->input('descripcion',true,'string');



        //si la validacion falla lo redirecciona a la vista donde esta los mensaje de error
        if($this->validateFails()){
            //este metodo REDIRECCIONA osea cambia de pagina, se le pasa a que controlador y que accion

            $this->redirect('Example','index');
        }else{

            $example=new Example();//no hace falta incluir el modelo ya esta incluido
            $example->setExampleParameters1($nombre);
            $example->setExampleParameters2($descripcion);
            $example->save();
            $this->redirect('Example','index');
        }
    }

    public function index2() {
        echo "Hello world";
    }
}