<?php
namespace Controllers;
use Model\Curso;
use Model\Profesor;
use MVC\Router;

class ProfesorController{
    public static function index(Router $router){
        
        $profesores=Profesor::all();
        $resultado=null;
        $resultado=$_GET['resultado'] ?? '';
        $router->render('profesores/admin',[
           
            'resultado'=>$resultado,
            'profesores'=>$profesores,

        ]);
    }
    public static function eliminar(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id=$_POST['id'];
            $id=filter_var($id,FILTER_VALIDATE_INT);
            if($id){
                $tipo=$_POST['tipo'];
                if(tipoContenido($tipo)){
                    $profesor=Profesor::find($id);
                    $profesor->eliminar();
                }
            }
        }

    }
    public static function crear(Router $router){
        $cursos=Curso::all();
        $profesor=new Profesor;
        $errores=$profesor->getErrores();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $profesor=new Profesor($_POST['profesor']);
            if ($_FILES['profesor']['error']['imagen'] === UPLOAD_ERR_OK) {
                $imagen = $_FILES['profesor']['tmp_name']['imagen'];
                $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
                // Verificar el tipo de imagen y redimensionar si es necesario
                $nuevaImagen = null;
                if ($_FILES['profesor']['type']['imagen'] === 'image/jpeg') {
                    $nuevaImagen = imagecreatefromjpeg($imagen);
                } elseif ($_FILES['profesor']['type']['imagen'] === 'image/png') {
                    $nuevaImagen = imagecreatefrompng($imagen);
                }
                if ($nuevaImagen) {
                    $nuevaImagen = imagescale($nuevaImagen, 500, 400);
                    imagejpeg($nuevaImagen, CARPETA_IMAGENES . '/' . $nombreImagen);
                    imagedestroy($nuevaImagen);
                    $profesor->setImagen($nombreImagen);
                }
            }
            $errores=$profesor->validar();
            if(empty($errores)){
                if(!is_dir(CARPETA_IMAGENES)){
                    mkdir(CARPETA_IMAGENES);
                }
                $profesor->guardar();
            }


        }

        $router->render('profesores/crear',[
            'errores'=>$errores,
            'cursos'=>$cursos,
            'profesor'=>$profesor     
        ]);

    }

}


?>