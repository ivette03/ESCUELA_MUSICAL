<?php
include 'includes/config/database.php';
$db=conectarDB();
//creo un email y password
$email="ibetanahy@gmail.com";
$password="123canserbero";
//HASHEAR CONTRASEÑA
$passwordHash=password_hash($password,PASSWORD_BCRYPT);
//query para crear usuario
$query="INSERT INTO usuarios(email,password) VALUES ('{$email}','{$passwordHash}')";
echo $query;

mysqli_query($db,$query);
?>