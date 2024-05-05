<?php
define('CARPETA_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');


function mostrarNotificacion($codigo){
    $mensaje='';
    switch($codigo){
        case 1:
            $mensaje="Creado correctamente";
            break;
        case 2:
            $mensaje="Actualizado correctamente";
            break;
        case 3:
            $mensaje="Eliminado correctamente";
            break;
    }
    return $mensaje;
}
function debuguear($data){
    echo "<pre>";
     var_dump($data);
    echo "</pre>";
    exit;
}

?>