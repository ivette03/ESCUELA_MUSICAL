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
                    $autenticado=$auth->comprobarPassword($resultado);
                    if($autenticado){
                        $auth->autenticar();

                    }else{
                        $errores=Admin::getErrores();
                    }
                    
                }
            }
           
        }

        $router->render('auth/login',[
            'errores'=>$errores
            

        ]);
    }
    public static function logout(Router $router){

       session_start();
       $_SESSION=[];
       header('Location: /');
    }

}
?>