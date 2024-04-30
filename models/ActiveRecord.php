<?php

namespace Model;
class ActiveRecord{
    protected static $db;
    //mi base de datos
    protected static $columnaDb = [];
    //errores
    protected static $errores = [];
    //tabla
    protected static $tabla='';

    public $id;
    public $imagen='';
   
    //definir la conexion a la bd
    public static function setDB($database){
        self::$db = $database;
    }

   

}

?>