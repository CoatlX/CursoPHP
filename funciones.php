<?php 
    echo '<a href="https://en.wikiversity.org/wiki/PHP/25_Essential_Functions">Funciones esenciales de PHP</a><br>';
    echo '<a href="https://www.php.net/manual/es/ref.strings.php">Funciones tipo String</a><br>';
    echo ' <a href=" https://www.academy.joystick.com.mx/courses/take/curso-introductorio-de-php-2023/audio/42874660-mas-sobre-funciones">
   Lección de funciones de Joystick
 </a><br>';
 echo '<a href="https://www.php.net/manual/es/ref.datetime.php">Funciones de fechas</a>';
//Parámetros

function cobrar(float $cantidad, string $moneda = 'MXN' )
{
    return'Hemos cobrado $' .number_format($cantidad,2). ' '. $moneda;
}
 
echo '<br><br>', cobrar(10.25,'USD');
include 'ejemploinclude.php';



/*INSERT INTO `tbl_as_pass` (`ID`, `user_name`, `user:_account`, `user_acc_pass`, `depto`) 
VALUES (NULL, 'Alejandro Lopez', 'alopez', '#IStem20', 'Sistemas');*/

 ?>
