
<?php

/*obtener la hora actual del servidor de Europe/Madrid útil
si la web está alojada en un servidor extranjero*/

$timezone = "Europe/Madrid";
date_default_timezone_set($timezone);
echo $timezone. "<br>";
//*************************************HORA DIA REFERENCIA
$instante = time();
$hora = date('H:i:s'); // Hora del servidor

echo $instante . "<br>";
echo $hora . "<br>";

?>