<?php 
/*Sesiones: Una sesión o variable de sesión, es un variable que se guarda temporalmente en tu navegador 
y solo tú podrás ver y modificar su contenido.*/
session_start();
//Si el usuario ya está verficado, redireccionamos a perfil.php
if (isset($_SESSION["verficado"])&&$_SESSION["verficado"]==true){
    header("Location: login/perfil.php");
    die;
}
//Verificamos si existe el parámetro GET verficado y es igual a true
if(isset($_GET["verficado"])&&$_GET["verficado"]==true){
    $_SESSION["verificado"]= true;
    header("Location: login/perfil.php");
    die;
}
//Si no está verificado le pedimos verificarse
    echo '<h3> Presiona el link para ingresar</h3>';
    echo '<a href="login/login.php?verificado=true">Verificar mi cuenta</a>';
 ?>


