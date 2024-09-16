 <?php 
 require_once 'BDD.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Primera Parte de PHP</title>
 </head>

 <body>  
   <a class="" style = " font-size: 2rem;" href="funciones.php">Sección de funciones</a><br>
   <a class="" style = " font-size: 2rem;" href="filehandler.php">Manejo de archivos</a><br>
   <a class="" style = " font-size: 2rem;" href="bdd.php">Bases de datos</a>

   <h1>Primer ejemplo de PHP</h1>
    <h3>Registro de equipo</h3>
    <!--<form action="process.php" method="GET"> Ejemplo con GET para obtener información, ahora se prueba con POST-->
    <form action="process.php" method="POST">
    <input type="hidden" id="id" name="id"value="123456789"><br>

    <label for="gamertag"> Gamertag:</label>
    <input type="text" id="gamertag" name="gamertag">

    <label for="nombre"> Nombre:</label>
    <input type="text" id="nombre" name="nombre">
 
    <label for="email"> Email:</label>
    <input type="email" id="email" name="email">

    <label for="juego"> Selecciona juego:</label>
    <select id="juego" name="juego">
    <option value="theewitcher3">The Witcher III</option>
    <option value="7d2d">7 Days to Die</option>
    <option value="ArkSA">Ark: Survival Ascended</option>
    <option value="projectzomboid">Project Zomboid</option>
   </select>

   <label for="miembros"> Número de miembros:</label>
    <input type="range" id="miembros" name="miembros" min="1" max = "6" value = "1">

    <label for="url"> Red Social:</label>
    <input type="url" id="url" name="url">

    <label for="color"> Color de equipo:</label>
    <input type="color" id="color" name="color">

    <input type="submit" value="Registrarse" name="submit">
    <input type="reset" value="Reiniciar" name="reset">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
 </body>
 </html>
  
