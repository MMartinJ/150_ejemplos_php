<?php

$url ="http://www.amazon.com"; // aqui pones la url
echo "redireccionar en 5 segundos enviando valor url=$url";

$tiempo_espera = 5; // Aquí se configura cuántos segundos hasta la actualización.
//Establecer el encabezado de actualización utilizando PHP.
header("refresh: $tiempo_espera; url=$url");
?>