<?php

/* clases que valida los campos ingresado en lo formularios por el metodo POST */

class Validations{
    private $validate = false;

    /*
     * Esta función valida si lo campos son o no requerido y si esta definidos por el metodo POST
     * Ademas de hacer la diferente validaciones depenediente del tipo la cuales retorna siempre el dato validado.
     * Los parametros obligatorio solamente es el name(nombre del campo) y required(si es requerido es true , si no false),
     */

    public function input($name,$required = false,$type=null,$max=null,$min=null){
        if (isset($_POST[$name])) {//si no esta definida(No existe)
            $value = $_POST[$name];
            if (($required && !empty($value))||!$required) {//si es requiridad y la variable no esta vacia
                if($type===null){
                     return $value;
                }else if($type==='string'){//verificar si es un string
                      $var= $this->isString($name,$value,$max,$min);
                     return $var;
                }else if($type==='int'){//verifica si es un numero
                       $var=$this->isInteger($name,$value,$max,$min);
                       return $var;
                }else if($type==='date'){//verifa si es una fecha
                    $var=$this->isDate($name,$value);
                    return $var;
                }else if($type==='email'){//verifa si es es correo valido
                    $var=$this->isEmail($name,$value);
                    return $var;
                }
            }else{
                $this->validate = true;
                $_SESSION[$name] = 'El campo ' . $name . ' es obligatorio';
            }
        }else{
            $this->validate = true;
            $_SESSION[$name] = 'El campo ' . $name . ' no esta definido en el método POST';
        }
    }

    /*verifica si es un string*/
    public function isDate($name,$value){
        $values = explode('-', $value);//separa la fecha donde se encuentre el caracter - y lo convierte en array
        if(count($values) === 3 && checkdate($values[1], $values[2], $values[0])){
            return $value;
        }else{
            $this->validate = true;
            $_SESSION[$name] = 'El campo ' . $name . ' tiene que ser de tipo fecha';
        }

    }

    //verifica que se un string valido
    public function isString($name,$value,$max,$min){
                if (is_string($value)) {//si es de type string
                    if (($max===null)||strlen($value) <= $max) {//si es mayor a la logintud maxima

                        if(($min===null)||strlen($value) >= $min){//si es menor a la logintud min
                            return $value;
                        }else{
                            $this->validate = true;
                            $_SESSION[$name] = 'El campo ' . $name . ' tiene que tener una longitud minima de '.$min;
                        }
                    }else{
                        $this->validate = true;
                        $_SESSION[$name] = 'El campo ' . $name . ' no puede execeder de '.$max.' longitud';
                    }
                }else{
                    $this->validate = true;
                    $_SESSION[$name] = 'El campo ' . $name . ' tiene que ser de tipo texto.';
                }
    }
    //verifica que se un entero valido
    public function isInteger($name,$value, $max=null,$min=null){
                if (is_numeric($value)) {//si es de type es entero

                    if (($max===null)||strlen($value) <= $max) {//si es mayor a la logintud maxima

                        if(($min===null)||strlen($value) >= $min){//si es menor a la logintud min
                            return $value;
                        }else{
                            $this->validate = true;
                            $_SESSION[$name] = 'El campo ' . $name . ' tiene que tener una longitud minima de '.$min;
                        }
                    }else{
                        $this->validate = true;
                        $_SESSION[$name] = 'El campo ' . $name . ' no puede exceder de '.$max.' longitud.';
                    }
                }else{
                    $this->validate = true;
                    $_SESSION[$name] = 'El campo ' . $name . ' tiene que ser de tipo numérico.';
                }
    }


    //verifica que sea un email valido
    public function isEmail($name,$value){
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return $value;
        } $this->validate = true;
        $_SESSION[$name] = 'El campo ' . $name . ' no tiene una dirección de correo electronico válida.';
    }

    //devuelve validade para comprobar si hubo algun error en la validacion
    public function validateFails(){
        return $this->validate;
    }


}