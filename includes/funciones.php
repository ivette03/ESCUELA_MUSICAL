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
function tipoContenido($tipo){
    $tipos=['curso','profesor'];
    return in_array($tipo,$tipos);

}
function debuguear($data){
    echo "<pre>";
     var_dump($data);
    echo "</pre>";
    exit;
}
function validadOredireccionar(string $url){
    $id=$_GET['id'];
    $id=filter_var($id,FILTER_VALIDATE_INT);
    if(!$id){
        header('Location: ${url}');
        exit;
    }
    return $id;

}
function s($html):string{
    $s=htmlspecialchars($html);
    return $s;
}

?>