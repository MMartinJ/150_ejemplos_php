<?php
/* Link con la URL puesta en una variable */
$web="http://www.google.es"; // Ruta de la URL
/* Abrimos el link con un script en javaScript pero con la URL de una variable
en PHP */ 
echo  "<script language=Javascript> location.href=('$web'); </script>";
?>