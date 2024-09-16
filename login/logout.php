<?php 
//inicia rtrabajo de sesiones
session_start();

//Destruye la sesión
session_destroy();

//redireccionamos
header('Location: login.php');
die;
 ?>
