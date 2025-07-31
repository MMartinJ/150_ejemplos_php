<?php

$nombre_fichero = "lista.txt";

//guarda en el fichero dicho mensaje
$texto = "Hola, como estas";

$mi_archivo = @fopen ($nombre_fichero, "w+") or die ("No se puede abrir 
el fichero especificado");

//Escribir

@fwrite ($mi_archivo,$texto) or die ("No se puede escribir");
$msg = "Los datos se han grabado correctamente";
fclose($mi_archivo);
// mostramos mensaje
echo $msg;
?>
