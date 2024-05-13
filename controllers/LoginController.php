<?php
namespace Controllers;
use MVC\Router;
use Model\Admin;
class LoginController{
    public static function login(Router $router){
        $errores=Admin::getErrores();
    
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $auth=new Admin($_POST['login']);
            $errores=$auth->validar();
            if(empty($errores)){
                //verificar si el usuario existe
                $resultado=$auth->existeUsuario();
                if(!$resultado){
                    $errores=Admin::getErrores();
                }else{
                    //verificar el password
                }
            }
           
        }

        $router->render('auth/login',[
            'errores'=>$errores,
            'auth'=>$auth

        ]);
    }
    public static function logout(Router $router){

        $router->render('auth/login',[
          

        ]);
    }

}
?>