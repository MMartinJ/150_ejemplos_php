<?php
//Lectura de todas las lineas del fichero enumerandolas 
$miarchivo = "lista.txt";
$abrir_archivo = fopen ($miarchivo,"r") or die ("No se puede abrir el archivo");
$cont = 1;
while (!feof($abrir_archivo))
{
 $linea = fgets($abrir_archivo,1024);
echo $cont;
 echo ":" .$linea . "<br>";
$cont++;
}
fclose($abrir_archivo);
?>