<?php

class Connect{
    private $driver;
    private $host;
    private $database;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        require_once ('config/database.php');

        $this->driver=DRIVER;
        $this->host=HOST;
        $this->user=USER;
        $this->password=PASSWORD;
        $this->database=DATABASE;
        $this->charset=CHARSET;
    }

    public function connection(){// Metodo que conecta con la base de datos.
      try{
          $connect=new PDO($this->driver.':host='.$this->host.';dbname='.$this->database,$this->user,$this->password);
          $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }catch (PDOException $e){
          echo "Linea de error:".$e->getLine()."<br>";
          echo "Codigo de error:".$e->getCode()."<br>";
          die("Error:".$e->getMessage());
      }
      return $connect;// retorna la conexion.
    }
}
