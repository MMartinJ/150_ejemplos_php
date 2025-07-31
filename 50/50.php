<?php

//Listar el contenido de una carpeta
$scan = scandir('carpeta');
foreach($scan as $file)
{//  is_dir - Indica si el nombre de archivo dado es un directorio y existe
    if (!is_dir("$scan/$file")) //si ponemos la variable $scan por eliminar nos mostrará . .. del directorio
    {
        echo $file."<br>"; // lista todos los archivos de la carpeta
	}
}

?>

