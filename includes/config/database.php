<?php
function conectarDb(){
    $db=new mysqli('localhost','root','root','escuela',3307);
    if(!$db){
        echo 'No se pudo conectar a la base de datos';
    }
    return $db;
}

?>