<?php

$ciudad = array(texto=>"Madrid","Valencia","Sevilla","Cadiz");

//Contamos el numero de elementos de la tabla

$contador = count($ciudad);

//imprimir en pantalla

for ($i=0;$i < $contador; $i++)
{
 echo ("La ciudad $i es $ciudad[$i] <br>");


}echo $ciudad[texto];

?>