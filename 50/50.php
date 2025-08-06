<?php
$directorio = 'carpeta';

// Verificar si el directorio existe
if (!is_dir($directorio)) {
    // Si no existe, mostrar un mensaje de error
    //die() es una funcion que termina la ejecución del script como exit() pero con un mensaje de error
    die("El directorio '$directorio' no existe.");
}

// Listar el contenido del directorio
// scandir() devuelve un array con los nombres de los archivos y directorios dentro del directorio especificado

$archivos = scandir($directorio);

foreach ($archivos as $archivo) {
    // DIRECTORY_SEPARATOR es una constante que contiene el separador de directorios del sistema operativo
    $rutaCompleta = $directorio . DIRECTORY_SEPARATOR . $archivo;

    // Excluir subdirectorios y las entradas especiales '.' y '..'
    if (!is_dir($rutaCompleta) && $archivo !== '.' && $archivo !== '..') {
        echo htmlspecialchars($archivo) . "<br>";
    }
}
?>


