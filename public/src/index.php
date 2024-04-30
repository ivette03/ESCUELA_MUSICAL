<?php
require_once __DIR__ . '/../../includes/app.php';
require_once '../../includes/funciones.php';

use MVC\Router;
use Controllers\PaginasController;

$router=new Router();
$router->get('/',[PaginasController::class,'index']);

$router->get('/contactanos',[PaginasController::class,'contactanos']);
$router->comprobarRutas();

?>