<?php
namespace Controllers;

use Model\Curso;
use MVC\Router;
class PaginasController{
    public static  function index(Router $router){
        $inicio=true;
        $cursos=Curso::all();
        $router->render('paginas/index',[
            'inicio'=>$inicio,
            'cursos'=>$cursos
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
