<?php
if (isset($_POST["eliminar"]) && isset($_POST["id_eliminar"])) {
    $id_eliminar = $_POST["id_eliminar"];
    $archivo = "datos.csv";
    $nuevo_contenido = '';
    if (($handle = fopen($archivo, "r")) !== false) {
        while (($linea = fgetcsv($handle, 1000, ";")) !== false) {
            if ($linea[0] != $id_eliminar) {
                $nuevo_contenido .= implode(";", $linea) . "\n";
            }
        }
        fclose($handle);
        file_put_contents($archivo, $nuevo_contenido);
        echo "Registro con ID $id_eliminar eliminado con éxito.";
    } else {
        echo "No se pudo abrir el archivo.";
    }
}
?>
