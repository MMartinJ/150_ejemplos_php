<?php  
// Permite la descarga de un archivo ocultando su ruta  

$nombre = "Coches.jpg";  
$filename = "carpeta_x/archivo.zip";  
$size = filesize($filename);  
header("Content-Transfer-Encoding: binary");  
header("Content-type: application/force-download");  
header("Content-Disposition: attachment; filename=$nombre");  
header("Content-Length: $size");  
readfile("$filename");  
?>   
