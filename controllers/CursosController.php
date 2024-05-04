<?php
namespace Controllers;
use MVC\Router;
use Model\Curso;
class CursosController{
    public static function index(Router $router){
        $cursos=Curso::all();
        $router->render('cursos/admin',[
            'cursos'=>$cursos

        ]);
    }



    public static function crear(Router $router){
        $curso=new Curso;
        $errores=$curso->getErrores();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $curso=new Curso($_POST['curso']);
                $errores=$curso->validar();
                if(empty($errores)){
                    $curso->guardar();
                }
        }
        $router->render('cursos/crear',[
            'curso'=>$curso,
            'errores'=>$errores
        ]);
    }
    
}

?>