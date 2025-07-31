<?php


//La función preg_match es una función en PHP que se utiliza
//para realizar coincidencias de patrones utilizando expresiones
//regulares. Las expresiones regulares son secuenc ias de caracteres
// que describen un patrón de búsqueda. preg_match permite buscar y
// coincidir cadenas de texto con ese patrón y devolver resultados basados en las coincidencias encontradas.



$fr="Me gusta el coco";
	if (preg_match("/coco/i", "$fr"))
{
	echo "La palabra coco existe";
 	}
	exit;
	 echo "no existe";


?>