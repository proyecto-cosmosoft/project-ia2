<?php

function app_autoload($class){
    if(is_file('app/controllers/'.$class.".php")){
        require_once ('app/controllers/'.$class.".php");
    }
}
spl_autoload_register('app_autoload');