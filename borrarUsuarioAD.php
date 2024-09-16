<?php 
require_once "config.php";

if(!isset($_GET["id"])){//Revisa si hay algún valor en ese campo requerido por $_POST si no hay no entra
    $_SESSION["error"] = "Acceso no autorizado";
   header("Location: index.php?error=true");
    //die;//para terminar hasta aquí
}
  /*  $_SESSION["exito"] = "Éxito en la conexión";
    header("Location: index.php");
    die;//para terminar hasta aquí*/
    //$id = $_GET["id"];
    $id = $_GET["id"];
    try {
        
        $db = conectarDB();
        $sql = "DELETE FROM tbl_ad_pass WHERE ID = :id LIMIT 1";
        $sentencia = $db->prepare($sql);
        $sentencia->bindParam("id",$id);
        $sentencia->execute();
        $usuarios = $sentencia->fetchAll();
        //print_r($usuarios);
        if (!empty($usuarios)){
            throw new Exception("Ese wey no existe");
        }
        $usuarioEdit = $usuarios[0];
        //Borrado de Usuario
        $db = null;
        $_SESSION["exito"]= sprintf("Se borró tu usuario con éxito");
        header("Location: UsuariosAD.php");

   } catch (Exception $e) {
        $_SESSION["error"] = $e->getMessage();
        header("Location: UsuariosAD.php?error?true");
        die;
    }
