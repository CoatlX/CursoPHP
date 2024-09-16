<?php 
/*echo '<h3>Al crear la BDD en el tipo de codificación selecciona utf8_general_ci para que reconozca eñes y acentos</h3>';
echo '<h3>C R U D (Create, Read, Update, Delete) DB => Post, Get, PUT, DELETE HTTP metodos</h3>';
echo '<a href="index.php">Regresar al inicio</a>';*/
try{

$conexion = null;
//Datos para DSN o Data Source Name
$engine   = "mysql";
$host     = "localhost";
$namedb   = "db_curso_php_joystick";
$charset  = "utf8";

//Credenciales
$username = "root";
$password ="";
$options =
[
    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=> PDO::FETCH_ASSOC //Remuevo indices numéricos
];

//Conexión:
$dsn =sprintf("%s:host=%s;dbname=%s;charset=%s",$engine,$host,$namedb,$charset);
//La conexión recibe 4 parámetros, el DSN Data Source Name, el usuario, el password y opciones de excepciones
$conexion = new PDO($dsn,$username, $password,$options);
//$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

return $conexion;

} catch(PDOException $e){
    throw new Exception(sprintf("Hubo en error en la conexión con la Base de Datos: %s", $e->getMessage()));
    

   /*Se quita echo, para nos mostrar el error desde aquí
    echo '<h3 style= "color: red; font: bold;">Hubo en error en la conexión con la Base de Datos</h3><br>'.$e->getMessage().'<br>';
    $e->getMessage() Obtiene el error de lo que haya fallado*/
}














//  EJEMPLOS DE COMO MOSTRAR LAS CONSULTAS CON echo
/*Recibir excepciones en caso de errores y no mande excepciones se puede hacer con array mostrado arriba con la variable $options
//$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
echo '<h5 style = "color: green;" >La conexión se ha establecido<br></h5>';
$consulta = $conexion->prepare("SELECT * FROM `tbl_as_pass`");
$consulta->execute();

$resultadoConsulta = $consulta->fetchAll();

//print_r($resultadoConsulta); //muestra todo el array resultante de la consulta
if (empty($resultadoConsulta)){
    echo "No se han encontrado resultados en la base de datos";
}else{
    foreach ($resultadoConsulta as $usernameAD){
        echo sprintf("<h3>%s - %s - %s</h3>", $usernameAD["user_name"], $usernameAD["user:_account"], $usernameAD["user_acc_pass"]);
    }
}*/

/*Comandos básicos
Dentro de todas las variantes de SQL existen algunos comandos básicos que se utilizan la mayor parte del tiempo, ten en cuenta que dependiendo la base de datos que estés utilizando, pueden variar los comandos. 

Aquí abajo te dejo 5 de los más comunes para realizar las principales tareas, que son la lectura, escritura, actualizado, búsqueda y eliminación de registros:

SELECT: Permite seleccionar los datos para descargar.
WHERE: Permite seleccionar qué filtro aplicar a los a datos descargar.
INSERT: Permite insertar datos.
DELETE: Permite borrar datos.
UPDATE: Permite actualizar los datos.
Ejemplos sencillos
Un ejemplo muy básico de búsqueda o selección puede ser:

SELECT * FROM clientes WHERE ciudad = "CDXM" OR ciudad = "Ciudad de México";*/
//mysqli para conectar a DB
//PDO PHP Data Objects

 ?>
  <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sección de BDD</title>
 </head>

 <body>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
 </body>
 </html>
