<?php 
/**
 * Crea una conexión a la base de datos
 * 
 * @return PDO
 */
function conectarDB(){//Conectar a las base de datos
    $db = require 'BDD.php';
    return $db; //Regresa un Objeto PDO (PHP Data Object)
}
function crearNuevoRegistro($name, $account, $pass, $depto){
    $db = conectarDB();
   
    $sql ="INSERT INTO tbl_ad_pass 
    (user_name, user_account, user_acc_pas, depto) 
    VALUES 
    (:user_name, :user_account, :user_acc_pas, :depto)";
    $sentencia = $db->prepare($sql);
    //Para insertar valor con placeholder de PDO
    $sentencia->bindParam("user_name",$name);
    $sentencia->bindParam("user_account",$account);
    $sentencia->bindParam("user_acc_pas",$pass);
    $sentencia->bindParam("depto",$depto);

    $sentencia-> execute(); 
    //Para obtener el último ID agregado
    $id_ultimo=  $db->LastInsertId();
    //Cerrar conexión como buena práctica
    $db = null;
    $_SESSION["exito"]= sprintf("Se agregó tu usario nuevo con el ID %s",$id_ultimo);
    header("Location: index.php");
    die;
}

function borrarRegistro(){

    $db = conectarDB();
       
    $sql ="UPDATE tbl_ad_pass 
    SET user_name = :user_name,
    user_account = :user_account,
     user_acc_pas = :user_acc_pas, 
     depto = :depto
     WHERE id = :id"; 

    $sentencia = $db->prepare($sql);
    //Para insertar valor con placeholder de PDO
    $sentencia->bindParam("id",$id);
    $sentencia->bindParam("user_name",$name);
    $sentencia->bindParam("user_account",$account);
    $sentencia->bindParam("user_acc_pas",$pass);
    $sentencia->bindParam("depto",$depto);

    $sentencia-> execute(); 
    //Para obtener el último ID agregado
    //Cerrar conexión como buena práctica
    $db = null;
    $_SESSION["exito"]= sprintf("Se actualizó tu usuario con el ID %s",$id_ultimo);
    header("Location: index.php");
    die;

}
    
        

    //var_dump($usuarios);
function editarRegistro($id,$name, $account, $pass, $depto){

        $db = conectarDB();
       
        $sql ="UPDATE tbl_ad_pass 
        SET user_name = :user_name,
        user_account = :user_account,
         user_acc_pas = :user_acc_pas, 
         depto = :depto
         WHERE id = :id"; 
    
        $sentencia = $db->prepare($sql);
        //Para insertar valor con placeholder de PDO
        $sentencia->bindParam("id",$id);
        $sentencia->bindParam("user_name",$name);
        $sentencia->bindParam("user_account",$account);
        $sentencia->bindParam("user_acc_pas",$pass);
        $sentencia->bindParam("depto",$depto);
    
        $sentencia-> execute(); 
        //Para obtener el último ID agregado
        //Cerrar conexión como buena práctica
        $db = null;
        $_SESSION["exito"]= sprintf("Se actualizó tu usuario con el ID %s",$id_ultimo);
        header("Location: index.php");
        die;

}
   
function cargar_deptos()
{
    $deptos = 
    [
        ["Administración","Administración"],
        ["Arrendadora","Arrendadora"],
        ["Mercadotecnia","Arrendadora"],
        ["Nóminas","Nóminas"],
        ["Refacciones","Refacciones"],
        ["Seguridad e Higiene","Seguridad e Higiene"],
        ["Seminuevos","Seminuevos"],
        ["Servicio","Servicio"],
        ["Sistemas","Sistemas"],
        ["Tesoreria","Tesoreria"],
        ["Ventas","Ventas"],
    ];
    return $deptos;
}

function mostrarError(){//Regresa el error si lo encuentra
    if(!isset($_SESSION["error"])){//No hace nada si no hay error
   
        return false;
    }
$error = $_SESSION["error"];
unset($_SESSION["error"]);//Borrar
$html = sprintf('<div class="alert alert-danger">%s</div>', $error);
return $html;
}
function mostrarExito(){
    if(!isset($_SESSION["exito"])){//No hace nada si no hay éxito
        return false;
         }
$exito = $_SESSION["exito"];
unset($_SESSION["exito"]);//Borrar
$html = sprintf('<div class="alert alert-success">%s</div>', $exito);
return $html;

}

 ?>