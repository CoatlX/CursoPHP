<?php 
require_once "config.php";

if(!isset($_POST["id"])){//Revisa si hay algún valor en ese campo requerido por $_POST si no hay no entra
    $_SESSION["error"] = "Acceso no autorizado";
   header("Location: index.php?error=true");
    //die;//para terminar hasta aquí
}
  /*  $_SESSION["exito"] = "Éxito en la conexión";
    header("Location: index.php");
    die;//para terminar hasta aquí*/
    $_POST = array_map('trim', $_POST);
    $id = $_POST["id"];
    $nombreUsuario = $_POST["nombre_usuario"];
    $nombreRed = $_POST["nombre_red"];
    $contrasenaA = $_POST["contrasena"];
    $depto = $_POST["departamento"];
    try {
        
            editarRegistro($id, $nombreUsuario,$nombreRed,$contrasenaA,$depto );

   } catch (Exception $e) {
        $_SESSION["error"] = $e->getMessage();
        header(sprintf("Location: editarUsuariosAD.php?error=true&id=%s", $id));
        die;
    }
