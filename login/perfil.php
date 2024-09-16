<?php 

session_start();
//Prevenimos el ingreso a la página de perfil si no es un usuario verificado
if (isset($_SESSION["verficado"])&&$_SESSION["verficado"]==false){
    header("Location: login/login.php");
    die;
}

//Mensaje de bienvenida
    echo '<h3> Bienvenido al perfil de usuario</h3>';
    echo '<a href="logout.php">Cerrar sesión</a>';
 ?>