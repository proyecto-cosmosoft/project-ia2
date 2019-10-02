<?php

class Example extends BaseModel {
    private $example_parameters2;
    private $example_parameters1;


    public function __construct(){
        parent::__construct();
    }


    public function getExampleParameters2(){
        return $this->example_parameters2;
    }


    public function setExampleParameters2($example_parameters2){
        $this->example_parameters2 = $example_parameters2;
    }


    public function getExampleParameters1(){
        return $this->example_parameters1;
    }


    public function setExampleParameters1($example_parameters1){
        $this->example_parameters1 = $example_parameters1;
    }




    public function getAll(){//para consultar todos lo registros de una tabla
        $query=$this->db()->query('SELECT * FROM roles');

        if($query->rowCount()>=1){
            while ($row=$query->fetch(PDO::FETCH_OBJ)){
                $resulSet[]=$row;
            }
        }else{
            $resulSet=$query->fetch(PDO::FETCH_OBJ);
        }

        $this->registerBiracora(EXAMPLE_MODULE,EXAMPLE_ACTION,'YohnnD');
        return $resulSet;
    }
 
    public function getBy(){//para consultar un registro por un determinado campo

    }

    public function save(){//para insertar o guardar un registro de la tabla
        $query=$this->db()->prepare('INSERT INTO roles(nombre_rol, descripcion_rol) VALUES (:nombre,:descripcion)');
        $query->bindParam(':nombre',$this->example_parameters1);
        $query->bindParam( ':descripcion',$this->example_parameters2);
        $this->registerBiracora(EXAMPLE_MODULE,EXAMPLE_ACTION,'YohnnD');
        $query->execute();
    }



    public function update(){//para actualizar un registro de la tabla

    }
    public function delete(){//para eliminar un registro de la tabla

    }





}