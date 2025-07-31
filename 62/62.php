<?php
// Configura la codificación de caracteres en la respuesta HTTP
header('Content-Type: text/html; charset=UTF-8');
//Contador de visitas

// Archivo en donde se acumulará el numero de visitas
$archivo = "visitas.txt";

// Abrimos el archivo para solamente leerlo (r de read)
$abre = fopen($archivo, "r");

// Leemos el contenido del archivo
$total = fread($abre, filesize($archivo));

// Cerramos la conexión al archivo
fclose($abre);

// Abrimos nuevamente el archivo
$abre = fopen($archivo, "w");

// Sumamos 1 nueva visita $total++;
$total = $total + 1;
// Y reemplazamos por la nueva cantidad de visitas 
$grabar = fwrite($abre, $total);

// Cerramos la conexión al 
fclose($abre);

// Imprimimos el total de visitas dándole un formatoo
echo "<font face='verdana' size='1' color='#07b7f7'>Eres el usuario número: ".$total." muchas gracias por tu visita</font>";


?>
