<?php

Class Autoloader{

    static function register(){

        spl_autoload_register(array('Autoloader','autoload'));
    }

    static function autoload($class_name){
    
        require($class_name.'.php');

}

}