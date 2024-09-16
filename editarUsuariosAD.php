<?php 
    require_once 'config.php';

    try {
        $id = Null;
       if (!isset($_GET["id"])){
            throw new Exception("No hay registro");
            
        }
        $id = $_GET["id"];
        $db = conectarDB();
        $sql = "SELECT * FROM tbl_ad_pass WHERE ID = :id LIMIT 1";
        $sentencia = $db->prepare($sql);
        $sentencia->bindParam("id",$id);
        $sentencia->execute();
        $usuarios = $sentencia->fetchAll();
        //print_r($usuarios);
        $usuarioEdit = $usuarios[0];//Guardar la psosición del array de la tabla
 
    } catch (Exception $e) {
         $_SESSION["error"] = $e->getMessage();
         header("Location: process_update.php?error=true");
         die;
     }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title><?php echo sprintf("Actualizando usuario %s", $usuarioEdit["user_name"] ); ?></title>

</head>
<body>
<div class="container">
   <div class="row">
      <div class="col 12 col-md-6 col-lg-4">
         <?php 
            echo mostrarError();
            echo mostrarExito();
          ?>
         <div class="card">   
               <div class="card-body">
                  <h3 class = "text-center" >Actualizar información de Usuario</h3>
                  <form action="process_update.php" method="POST">
                                    <!-- PARA guardar el ID -->
                           <input class = "form-control"  type="hidden" id="id" name="id" value="<?php echo $usuarioEdit["ID"]; ?>">
                           <label class = "label-control" for="nombre_usuario">Nombre usuario:</label>
                           <input 
                           value="<?php echo $usuarioEdit["user_name"]; ?>"
                           class = "form-control" type="text" id="nombre_usuario" name="nombre_usuario">

                           <label class = "label-control" for="nombre_red">Cuenta de red:</label>
                           <input value="<?php echo $usuarioEdit["user_account"]; ?>"
                           class = "form-control"  type="text" id="nombre_red" name="nombre_red">

                           <label class = "label-control" for="contrasena"> Contraseña:</label>
                           <input value="<?php echo $usuarioEdit["user_acc_pas"]; ?>"
                           class = "form-control"  type="text" id="contrasena" name="contrasena">

                           <label class = "label-control" for="departamento"> Selecciona departamento:</label>
                           <select class = "form-select mb-5" id="departamento" name="departamento">

                           <?php foreach (cargar_deptos() as $dpto):?>
                                <option value="<?php echo $dpto[0] ?>"
                                <?php echo $dpto[0] === $usuarioEdit["depto"] ? "selected" : null;?><!--
                                ><?php echo $dpto[0]; ?></option>
                            <?php endforeach;  ?>
                           </select>
                           <button class = "btn btn-success" type ="submit">Actualizar</button>
                           <button class = "btn btn-danger" type ="reset">Reiniciar</button> 
                  </form>
            </div>
            <div class="card-footer">
               <a href="usuariosAD.php" class="btn btn-primary btn-sm">Regresar a Usuarios</a>
            </div>
         </div>
      </div>
   </div>
</div>
</body>
</html>