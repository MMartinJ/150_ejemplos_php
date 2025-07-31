<?php

/* Copiar un archivos de una carpeta a otra carpeta que 
se encuentran en la raiz (defino variables)*/
$archivo = 'imagenes/foto.jpg';
$nuevo_archivo = 'ofertas/foto.jpg';
// copy realiza la copia
if (!copy($archivo, $nuevo_archivo)) {
    echo "Error al copiar $archivo...\n";
}
?>

