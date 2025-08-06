<?php
// Convertir números a letras

$valores=array("cero", "uno", "dos", "tres", "quatro", "cinco", "seis", "siete", "ocho", "nueve");

$numeros="001256347890";
for($i=0;$i<strlen($numeros);$i++)
{
    echo $numeros[$i]." - ".$valores[$numeros[$i]]."<br>";
}
?>