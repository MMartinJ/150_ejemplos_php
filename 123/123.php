<?php
$color="#0000FF";
$texto="Verdana";
$size=16;

// Leer datos del fichero lista.txt
$archivo = "lista.txt";
$leer = @fopen($archivo, "r") or die("No se puede abrir el archivo");
$contenido_archivo = fread($leer, filesize($archivo));
echo "<font size='$size' color='$color' face='$texto'>$contenido_archivo</font><br>";

//echo $contenido_archivo;
fclose($leer);
?>