<?php
namespace MVC;
class Router{
   public $rutasGet=[];
   public $rutasPost=[];
   public function get($url,$fn){
    $this->rutasGet[$url]=$fn;
   }
   public function post($url,$fn){
    $this->rutasPost[$url]=$fn;
   }
   public function comprobarRutas(){
    session_start();
    $auth=$_SESSION['login'] ?? null;
    $urlActual=$_SERVER['PATH_INFO'] ?? '/';
    $rutasProtegidas=['/admin','/cursos/crear','/cursos/actualizar','/cursos/eliminar','/profesor/crear','/profesor/actualizar','/profesor/eliminar'];
    if(in_array($urlActual, $rutasProtegidas) && !$auth){
      header('Location: /');

    }
   
    $metodo=$_SERVER['REQUEST_METHOD'];
    if($metodo === 'GET'){
        $fn=$this->rutasGet[$urlActual] ?? null;
    }else{
      $fn=$this->rutasPost[$urlActual] ?? null;
    }
    if ($fn){
        call_user_func($fn,$this);
    }
    
   }

   //muestra una vista
   public function render($view, $datos=[]){
     foreach($datos as $key=>$value){
        $$key=$value;
     }
     ob_start(); //guarda en memoria por un momento
     include __DIR__."/views/$view.php";
     $contenido=ob_get_clean();//limpia  el bufer

     include __DIR__ ."/views/layout.php";
   }



}


?>