<?php
namespace Controllers;

use Model\Curso;
use Model\Profesor;
use MVC\Router;
class PaginasController{
    public static  function index(Router $router){
        $inicio=true;
        $cursos=Curso::all();
        $profesores=Profesor::get(3);
         // Si no estás en la página "cursos.php", obtén solo los primeros tres cursos
        if ($_SERVER['SCRIPT_NAME'] !== '/cursos.php') {
           $cursos = Curso::get(3);
        }
        
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
