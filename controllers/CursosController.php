<?php
namespace Controllers;
use MVC\Router;
use Model\Curso;
class CursosController{
    public static function index(Router $router){
        $cursos=Curso::all();
        $resultado=null;
        $resultado=$_GET['resultado'] ?? '';
        $router->render('cursos/admin',[
            'cursos'=>$cursos,
            'resultado'=>$resultado

        ]);
    }
    public static function eliminar(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id=$_POST['id'];
            $id=filter_var($id,FILTER_VALIDATE_INT);
            if($id){
                $tipo=$_POST['tipo'];
                if(tipoContenido($tipo)){
                    $curso=Curso::find($id);
                    $curso->eliminar();
                }
            }
        }

    }
    public static function crear(Router $router){
        $curso=new Curso;
        $errores=$curso->getErrores();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $curso=new Curso($_POST['curso']);
            if ($_FILES['curso']['error']['imagen'] === UPLOAD_ERR_OK) {
                $imagen = $_FILES['curso']['tmp_name']['imagen'];
                $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
                // Verificar el tipo de imagen y redimensionar si es necesario
                $nuevaImagen = null;
                if ($_FILES['curso']['type']['imagen'] === 'image/jpeg') {
                    $nuevaImagen = imagecreatefromjpeg($imagen);
                } elseif ($_FILES['curso']['type']['imagen'] === 'image/png') {
                    $nuevaImagen = imagecreatefrompng($imagen);
                }
                if ($nuevaImagen) {
                    $nuevaImagen = imagescale($nuevaImagen, 500, 400);
                    imagejpeg($nuevaImagen, CARPETA_IMAGENES . '/' . $nombreImagen);
                    imagedestroy($nuevaImagen);
                    $curso->setImagen($nombreImagen);
                }
            } 
            $errores=$curso->validar();
            if(empty($errores)){
                if(!is_dir(CARPETA_IMAGENES)){
                  mkdir(CARPETA_IMAGENES);
                }
                $curso->guardar();
            }    
        }
        $router->render('cursos/crear',[
            'curso'=>$curso,
            'errores'=>$errores
        ]);
    }
    public static function actualizar(Router $router){
        
        $errores=Curso::getErrores();
        $id=validadOredireccionar('/admin');
        $curso=Curso::find($id);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $args=$_POST['curso'];
            $curso->sincronizar($args);
            $errores=$curso->validar();
            if(empty($errores)){
                if($_FILES['curso']['name']['imagen']){
                    $imagen=$_FILES['curso']['tmp_name']['imagen'];
                    if(!is_dir(CARPETA_IMAGENES)){
                        mkdir(CARPETA_IMAGENES);
                    }
                    $nombreImagen=md5(uniqid(rand(), true)) . "jpg";
                    $rutaImagen=CARPETA_IMAGENES . $nombreImagen;
                    move_uploaded_file($imagen, $rutaImagen);
                    $curso->setImagen($nombreImagen);
                }
                
                $curso->guardar();
            }

        }
        $router->render('cursos/actualizar',[
            'errores'=>$errores,
            'curso'=>$curso

        ]);
    }
    
}

?>