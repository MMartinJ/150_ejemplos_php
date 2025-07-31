
<?php
// Leer archivo
echo "Leer datos del fichero listas.txt";
$archivo = "lista.txt";
$leer = fopen($archivo, "r") or die("No se puede abrir el archivo");
$contenido_archivo = fread($leer, filesize($archivo));
echo "<br>";
echo $contenido_archivo;
fclose($leer);
?>
