 <?php 
 //Manera de traer solo la conexión de la BDD lo mismo que se hizo desde BDD.php
 /*try {
   $conexionTraida = require 'BDD.php';
   $consulta = $conexionTraida->prepare("SELECT * FROM `tbl_as_pass`");
   $consulta->execute();

   $resultadoConsulta = $consulta->fetchAll();
   if (empty($resultadoConsulta)){
    echo "No se han encontrado resultados en la base de datos";
   }else{
    
      foreach ($resultadoConsulta as $usernameAD){
        echo sprintf("<h3>%s - %s - %s</h3>", $usernameAD["user_name"], $usernameAD["user:_account"], $usernameAD["user_acc_pass"]);
      }
   }
 } catch (Exception $e) {
   echo $e->getMessage();
 }*/
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="CSS/styles.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Primera Parte de PHP</title>
 </head>

 <body>  
   <a class="" style = " font-size: 2rem;" href="funciones.php">Sección de funciones</a><br>
   <a class="" style = " font-size: 2rem;" href="filehandler.php">Manejo de archivos</a><br>
   <a class="" style = " font-size: 2rem;" href="bdd.php">Bases de datos</a>

   <h1>Primer ejemplo de PHP</h1>
   <?php 
   unset($_SESSION["nombre_usuario"]);
    ?>
<div class="container">
   <div class="row">
      <div class="col 12 col-md-6 col-lg-4">
         <div class="card">
            <h3 class = "card-header border-bottom-0">Registro de usuario</h3>
            <div class="card-body">
               <form action="process.php" method="POST">
                     <input class = "form-control"  type="hidden" id="id" name="id"value="123456789"><br>
                     <label class = "label-control" for="nombre_usuario">Nombre usuario:</label>
                     <input class = "form-control"  type="text" id="nombre_usuario" name="nombre_usuario">
                     <label class = "label-control" for="nombre_red">Cuenta de red:</label>

                     <label class = "label-control" for="contrasena"> Contraseña:</label>
                     <input class = "form-control"  type="text" id="contrasena" name="contrasena">
               <!-- <label class = "label-control" for="email"> Email:</label>
                  <input class = "form-control"  type="email" id="email" name="email">-->
                     <label class = "label-control" for="departamento"> Selecciona departamento:</label>
                     <select class = "form-select" id="departamento" name="departamento">
                     <option value="Admon">Administración</option>
                     <option value="7d2d">Arrendadora</option>
                     <option value="ArkSA">Mercadotecnia</option>
                     <option value="Noms">Nóminas</option>
                     <option value="Refs">Refacciones</option>
                     <option value="SyH">Seguridad e Higiene</option>
                     <option value="Semi">Seminuevos</option>
                     <option value="Serv">Servicio</option>
                     <option value="Sis">Sistemas</option>
                     <option value="Tes">Tesoreria</option>
                     <option value="Vent">Ventas</option>
                     </select>
               <!-- <div class="mb-3">
               <label class = "label-control" for="miembros"> Número de miembros:</label>
                     <input class = "form-control"  type="range" id="miembros" name="miembros" min="1" max = "6" value = "1">
               </div>
               <div class="mb-3">
               <label class = "label-control" for="url"> Red Social:</label>
                     <input class = "form-control"  type="url" id="url" name="url">
               </div>
               <div class="mb-3">
               <label class = "label-control" for="color"> Color de equipo:</label>
                     <input class = "form-control"  type="color" id="color" name="color">
               </div>
                     <input class = "form-control"  type="submit" value="Registrarse" name="submit">
                     <input class = "form-control"  type="reset" value="Reiniciar" name="reset">
                     Reemplazamos por botones Bootstrap-->
                     <button class = "btn btn-success" type ="submit">Registrase</button>
                     <button class = "btn btn-danger" type ="reset">Reiniciar</button> 
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
   
    <!--<form action="process.php" method="GET"> Ejemplo con GET para obtener información, ahora se prueba con POST-->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
 </body>
 </html>
  
