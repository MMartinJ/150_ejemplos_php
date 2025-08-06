<?php
// Borrar el archivo que está dentro de la carpeta
$archivo = 'fondos/cielo.png';

if (file_exists($archivo)) {
    // Intentar eliminar el archivo
    // Si el archivo se elimina correctamente, se muestra un mensaje de éxito
    if (unlink($archivo)) {
        echo "✅ Se ha eliminado correctamente el archivo: $archivo";
    } else {
        // Si no se puede eliminar, se muestra un mensaje de error
        // Esto puede ocurrir si el archivo está en uso o si no se tienen permisos adecuados
        echo "❌ No se pudo eliminar el archivo: $archivo";
    }
} else {
    // Si el archivo no existe, se muestra un mensaje de advertencia
    // Esto es útil para evitar errores al intentar eliminar un archivo que no está presente
    echo "⚠️ El archivo no existe: $archivo";
}
?>
