<?
 // Completamos el vector con frases
 $vector = array(
 1 => "Nada nuevo hay bajo el sol, pero cuántas cosas viejas hay que no conocemos.",
 2 => "El verdadero amigo es aquel que está a tu lado cuando preferiría estar en otra parte.",
 3 => "La sabiduría es la hija de la experiencia.",
 4 => "Nunca hay viento favorable para el que no sabe hacia dónde va.",
 );

 // Obtenemos un número aleatorio
 $numero = rand(1,4); 

// Imprimimos la frase
 echo "$vector[$numero]";
 ?>