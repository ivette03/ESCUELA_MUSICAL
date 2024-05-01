<?php
namespace Controllers;
use MVC\Router;
use Model\Curso;
class CursosController{
    public static function crear(Router $router){
        $curso=new Curso;
        $errores=$curso->getErrores();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $curso=new Curso($_POST['curso']);
                $errores=$curso->validar();
        }
        $router->render('cursos/crear',[
            'curso'=>$curso,
            'errores'=>$errores

          
           



        ]);
    }
    public static function admin(Router $router){
        $router->render('cursos/admin',[

        ]);
    }
}

?>