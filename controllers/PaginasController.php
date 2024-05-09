<?php
namespace Controllers;

use Model\Curso;
use Model\Profesor;
use MVC\Router;
class PaginasController{
    public static  function index(Router $router){
        $inicio=true;
        $cursos=Curso::all();
        $profesores=Profesor::all();
        $router->render('paginas/index',[
            'inicio'=>$inicio,
            'cursos'=>$cursos,
            'profesores'=>$profesores
        ]);    
    }
    public static function contactanos(Router $router){
        $router->render('paginas/contactanos',[
            
        ]);
    }
    public static function cursos(Router $router){
        $cursos=Curso::all();
        $router->render('paginas/cursos',[
            'cursos'=>$cursos

        ]);
    }
   

}
?>
