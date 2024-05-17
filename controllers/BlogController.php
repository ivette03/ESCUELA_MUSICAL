<?php
namespace Controllers;
use Model\Blog;
use MVC\Router;
class BlogController{
    public static function crear(Router $router){
       $blog=new Blog();
        $errores=$blog->getErrores();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $blog=new Blog($_POST['blog']);
            if ($_FILES['blog']['error']['imagen'] === UPLOAD_ERR_OK) {
                $imagen = $_FILES['blog']['tmp_name']['imagen'];
                $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
                // Verificar el tipo de imagen y redimensionar si es necesario
                $nuevaImagen = null;
                if ($_FILES['blog']['type']['imagen'] === 'image/jpeg') {
                    $nuevaImagen = imagecreatefromjpeg($imagen);
                } elseif ($_FILES['blog']['type']['imagen'] === 'image/png') {
                    $nuevaImagen = imagecreatefrompng($imagen);
                }
                if ($nuevaImagen) {
                    $nuevaImagen = imagescale($nuevaImagen, 500, 400);
                    imagejpeg($nuevaImagen, CARPETA_IMAGENES . '/' . $nombreImagen);
                    imagedestroy($nuevaImagen);
                    $blog->setImagen($nombreImagen);
                }
            } 
            $errores=$blog->validar();

            if(empty($errores)){
                $blog->guardar();
            }
        }
        $router->render('blog/crear',[
            'blog'=>$blog,
            'errores'=>$errores


        ]);
    }
    
    public static function eliminar(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id=$_POST['id'];
            $id=filter_var($id,FILTER_VALIDATE_INT);
            if($id){
               $tipo=$_POST['tipo'];
               if(tipoContenido($tipo)){
                $blog=Blog::find($id);
                $blog->eliminar();

               }
            }
        }
    }
    public static function actualizar(Router $router){
        $errores=Blog::getErrores();
        $id=validadOredireccionar('/admin');
        $blog=Blog::find($id);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $args=$_POST['blog'];
            $blog->sincronizar($args);
            $errores=$blog->validar();
            if(empty($errores)){
                if($_FILES['blog']['name']['imagen']){
                    $imagen=$_FILES['blog']['tmp_name']['imagen'];
                    if(!is_dir(CARPETA_IMAGENES)){
                        mkdir(CARPETA_IMAGENES);
                    }
                    $nombreImagen=md5(uniqid(rand(), true)) . "jpg";
                    $rutaImagen=CARPETA_IMAGENES . $nombreImagen;
                    move_uploaded_file($imagen, $rutaImagen);
                    $blog->setImagen($nombreImagen);
                }
                
                $blog->guardar();
            }

        }
        $router->render('blog/actualizar',[
            'errores'=>$errores,
            'blog'=>$blog
        ]);
        
      

    }


}
?>