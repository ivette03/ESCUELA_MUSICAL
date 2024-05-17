<?php

namespace Controllers;

use Model\Blog;
use Model\Curso;
use Model\Profesor;
use MVC\Router;
use PHPMailer\PHPMailer\PHPMailer;

class PaginasController
{
    public static  function index(Router $router)
    {
        $inicio = true;
        $cursos = Curso::all();
        $profesores = Profesor::get(3);
        // Si no estás en la página "cursos.php", obtén solo los primeros tres cursos
        if ($_SERVER['SCRIPT_NAME'] !== '/cursos.php') {
            $cursos = Curso::get(3);
        }

        $router->render('paginas/index', [
            'inicio' => $inicio,
            'cursos' => $cursos,
            'profesores' => $profesores
        ]);
    }
    public static function contactanos(Router $router)
    {
        $mensaje=null;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $respuestas = $_POST['contacto'];
            //CREAR INSTANCIA DE PHPMAILER
            $mail = new PHPMailer();
            
            
            //CONFIGURAR EL SMTP
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '7711674ddd6797';
            $mail->Password = '6b746f6b6ce4de';
            $mail->SMTPSecure = 'tls';
            $mail->Port = '2525';
            //configurar el contenido del mail
            $mail->setFrom('ibetanahy@gmail.com');
            $mail->addAddress('ibetanahy@gmail.com', 'escuelamusica.com');
            $mail->Subject = 'Tienes un nuevo mensaje';
            //habilitar html
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            //DEFINIR EL CONTENIDO;
            $contenido = '<html>';
            $contenido .= '<p>Nombre: ' . $respuestas['nombre'] . '</p>';
            $contenido .= '<p>Apellido: ' . $respuestas['apellido'] . '</p>';
            if($respuestas['contacto'] === 'telefono'){
                $contenido .= '<p>Prefiere se contactado por: teléfono' .'</p>';
                $contenido .= '<p>telefono: ' . $respuestas['telefono'] . '</p>';
                $contenido .= '<p>Fecha: ' . $respuestas['fecha'] . '</p>';
                $contenido .= '<p>Hora: ' . $respuestas['hora'] . '</p>';
            }else{
                $contenido .= '<p>Prefiere se contactado por: email' .'</p>';
                $contenido .= '<p>Email: ' . $respuestas['email'] . '</p>';
            }
   
            $contenido .= '<p>Mensaje: ' . $respuestas['mensaje'] . '</p>';
            $contenido .= '<p>Curso: ' . $respuestas['curso'] . '</p>';
           
            
            $contenido .= '</html>';
            $mail->Body = $contenido;
            $mail->AltBody = "esto e stexto alternativo sin html";
            if ($mail->send()) {
                $mensaje= "Mensaje enviado";
            } else {
                $mensaje= "No se pudo enviar el mensaje";
            }
        }
        $router->render('paginas/contactanos', [
            'mensaje'=>$mensaje
        ]);
    }

    public static function cursos(Router $router)
    {
        $cursos = Curso::all();
        $router->render('paginas/cursos', [
            'cursos' => $cursos

        ]);
    }
    public static function blog(Router $router){
        $blogs=Blog::all();
        $router->render('paginas/blog',[
            'blogs'=>$blogs
        ]);
    }
    public static function blog_completo(Router $router){
        $id=validadOredireccionar('/admin');
        $blog=Blog::find($id);
        $router->render('paginas/blog_completo',[
            'blog'=>$blog
        ]);
    }
}
