<?php 
function abrirArchivo(){
    $archivo = "prueba.txt";
    $fp = fopen($archivo,"r");
    $contenido = fread($fp,filesize($archivo));
   // fclose($archivo);
}

function escribirArchivo(){
    $archivo = "prueba.txt";
    $newContent="Voy a agregar esto también";
    $fp = fopen($archivo,"w");
    if (feof($fp)== true){
        fwrite($fp, $newContent);
    }
   
    //fputs
   // fclose($archivo);
}
function puntero(){
    $archivo = "prueba.txt";
    $newContent="1234567890";
    $fp = fopen($archivo,"r");
    echo ftell($fp). '<br>';
    fseek($fp,10). '<br>';
    echo ftell($fp);
   // fclose($archivo);
}


abrirArchivo();
escribirArchivo();
puntero();
//fclose($archivo);
 ?>