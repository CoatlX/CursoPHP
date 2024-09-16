<?php 
    require_once "config.php";

    try {
        $db = conectarDB();
        $sql = "SELECT * FROM tbl_ad_pass ORDER BY user_name ASC";
        $sentencia = $db->prepare($sql);
        $sentencia->execute();
        $usuarios = $sentencia->fetchAll();
        //var_dump($usuarios); Muestra el array de usuarios
 
    } catch (Exception $e) {
         $_SESSION["error"] = $e->getMessage();
         header("Location: index.php?error=true");
         die;
     }

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="CSS/styles.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Usuarios AD</title>
 </head>
  <h1>Lista de usuarios y contraseñas</h1> 
  
  <div class="container py-5">
   <div class="row">
      <div class="col 12 col-md-12 col-lg-12">
         <?php 
            echo mostrarError();
            echo mostrarExito();?>
            <?php if(!empty($usuarios)):?>
                <a href="index.php" class="btn btn-primary float-end">Agregar equipo</a>
                <table class="table table-striped table-hover broder-2">
                <thead>
                    <tr>
                        <th>Nombre usuario</th>
                        <th>Cuenta</th>
                        <th>Contraseña</th>
                        <th>Departamento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario):?>
                        <tr>
                            <td><?php echo $usuario["user_name"]; ?> </td>
                            <td><?php echo $usuario["user_account"]; ?> </td>
                            <td><?php echo $usuario["user_acc_pas"]; ?> </td>
                            <td><?php echo $usuario["depto"]; ?> </td>
                            <td><a class = "btn btn-success btn-sm"
                            href="<?php echo sprintf("editarUsuariosAD.php?id=%s",$usuario["ID"]); ?>">Editar</a>
                            <a class = "btn btn-danger btn-sm"
                            href="<?php echo sprintf("borrarUsuarioAD.php?id=%s",$usuario["ID"]); ?>">Borrar</a> 
                        </td>

                        </tr>
                        <?php endforeach; ?>     
                </tbody>
                </table>
            <?php else: ?>
            <div class="alert alert-danger text-center">No hay usuarios en la Base de Datos</div>  
            <?php endif; ?>
      </div>
   </div>
</div>

 </body>
 </html>