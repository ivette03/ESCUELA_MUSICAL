<?php
require_once __DIR__ . '/../../includes/app.php';
require_once '../../includes/funciones.php';

use Controllers\CursosController;
use MVC\Router;
use Controllers\PaginasController;
use Controllers\ProfesorController;
use Controllers\LoginController;
use Model\Curso;
USE Model\Profesor;
$router=new Router();

$router->get('/',[PaginasController::class,'index']);
$router->get('/contactanos',[PaginasController::class,'contactanos']);
$router->post('/contactanos',[PaginasController::class,'contactanos']);
$router->get('/cursos',[PaginasController::class,'cursos']);


$router->get('/cursos/crear',[CursosController::class,'crear']);
$router->post('/cursos/crear',[CursosController::class,'crear']);
$router->get('/cursos/actualizar',[CursosController::class,'actualizar']);
$router->post('/cursos/actualizar',[CursosController::class,'actualizar']);
$router->post('/cursos/eliminar',[CursosController::class,'eliminar']);

$router->get('/profesor/crear',[ProfesorController::class,'crear']);
$router->get('/profesor/actualizar',[ProfesorController::class,'actualizar']);
$router->post('/profesor/actualizar',[ProfesorController::class,'actualizar']);
$router->post('/profesor/crear',[ProfesorController::class,'crear']);
$router->post('/profesor/eliminar',[ProfesorController::class,'eliminar']);

$router->get('/login',[LoginController::class,'login']);
$router->post('/login',[LoginController::class,'login']);
$router->get('/logout',[LoginController::class,'logout']);

$router->get('/admin',[CursosController::class,'index']);

$router->comprobarRutas();

?>