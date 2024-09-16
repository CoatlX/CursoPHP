<?php 
require_once "config.php";



if(!isset($_POST["nombre_usuario"])){//Revisa si hay algún valor en ese campo requerido por $_POST si no hay no entra
    $_SESSION["error"] = "Acceso no autorizado";
   header("Location: index.php?error=true");
    die;//para terminar hasta aquí
}
  /*  $_SESSION["exito"] = "Éxito en la conexión";
    header("Location: index.php");
    die;//para terminar hasta aquí*/

    try {
       // $_POST = array_map('trim', $_POST);Agrea trim a todas las variables del POST
        $nombreUsuario = trim($_POST["nombre_usuario"]);
        $nombreRed = trim($_POST["nombre_red"]);
        $contrasenaA = trim($_POST["contrasena"]);
        $depto = trim($_POST["departamento"]);
        
        //Validar variables
       /* if(strlen($contrasenaA) < 5){       
            throw new Exception("Contraseña inválida");
            }*/
            crearNuevoRegistro( $nombreUsuario,$nombreRed,$contrasenaA,$depto );

   } catch (Exception $e) {
        $_SESSION["error"] = $e->getMessage();
        header("Location: index.php?error=true");
        die;
    }















/*Sirve para recibir información de formularios y enviarlos de rgreso, "echo" agrega lineas de código al HTML
echo '<h1>Estamos recibiendo lo  siguiente</h1>';
echo '<pre>';
print_r($_REQUEST);//requisita información de forms
echo '</pre>';

//$_POST y $_GET variable superglobal para recibir información de forms, post oculta la info en la barra de direcciones

/*Ahora usaremos $_POST en vez de $_GET variable superglobal para recibir
echo '<h3>Obtener Gamertag solo, usando superglobal $_GET<br> O cualquier deseada </h3>';
echo $_GET["gamertag"], "<br>";
echo $_GET["email"];
echo '<h3>Obtener Gamertag solo, usando superglobal $_GET<br> O cualquier deseada </h3>';
echo $_POST["gamertag"], "<br>";
echo $_POST["email"], "<br>";
$cookieGT = $_POST["email"];
setcookie('gamertag', "dsfsdf" , time() + 360);
echo '<h3>Obtener Gamertag solo, usando superglobal $_GET<br> O cualquier deseada </h3>';

//unsetcookie para borrarla
//echo $_COOKIE['gamertag'];*/

/* Sintaxis de if, else else if
Operadores de comparación: ===, ==, !=, !==, <, >, <=, >=.
Operadores lógicos: and, or, xor, !$variable (Not), &&, ||.
if($a < $b){
echo "a es menor que b";}
elseif($a == $b){
echo "etc"
}
else{
echo "Lo que sea"
}
*/
/* Sintaxis de switch case
switch ($variable){
case: "value1":
    break;
    case: "value2":
    break;
    case: "valuen":
    break;
}
*/
/*ciclos
$vueltas =1;
while($vueltas<= 10){
    echo "Voy en la vuelta $vueltas\n";
    $vueltas++;
}

$vueltas =1;
do{
    echo "Voy en la vuelta $vueltas\n";
    $vueltas++;
}while($vueltas<=10);

$vueltas =1;
for($vueltas; $vueltas<=10; $vueltas++){
    echo "Voy en la vuelta $vueltas\n";
}
$caja = [
    ['nombre'=> 'Jorge','color'=>'café'],
    ['nombre'=> 'Álex','color'=>'rojo'],
    ['nombre'=> 'Jesús','color'=>'verde'],
    ['nombre'=> 'San','color'=>'blanco'],

];

foreach ($caja as $peluche){
    echo "El peluche no. 0" . $index." se llama " . $peluche['nombre']. " y es de color ".$peluche['color']. "\n";
}
continue; sirve para termina una iteración cuando llega a una conficionante, si el IF busca el 5 del 1 al 10, el ciclo será
1,2,3,4,   6,7,8,9,10   
break; detiene la iteración 
*/


