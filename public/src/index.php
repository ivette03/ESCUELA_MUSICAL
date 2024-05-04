<?php
require_once __DIR__ . '/../../includes/app.php';
require_once '../../includes/funciones.php';

use Controllers\CursosController;
use MVC\Router;
use Controllers\PaginasController;

$router=new Router();
$router->get('/',[PaginasController::class,'index']);

$router->get('/contactanos',[PaginasController::class,'contactanos']);
$router->get('/cursos',[PaginasController::class,'cursos']);


$router->get('/cursos/crear',[CursosController::class,'crear']);
$router->post('/cursos/crear',[CursosController::class,'crear']);
$router->get('/admin',[CursosController::class,'index']);

$router->comprobarRutas();

?>