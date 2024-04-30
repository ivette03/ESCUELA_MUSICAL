<?php
require __DIR__ . '/../vendor/autoload.php';
require 'funciones.php';
require_once __DIR__ . '/config/database.php';

$db=conectarDb();
use Model\ActiveRecord;
ActiveRecord::setDB($db);


?>