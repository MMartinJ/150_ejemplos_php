<?php
// Función para obtener el siguiente ID
function obtenerSiguienteId($archivoCsv) {
    if (!file_exists($archivoCsv)) {
        return 1; // Si no existe el archivo, empezamos en 1
    }

    $ultimoId = 0;
    if (($handle = fopen($archivoCsv, "r")) !== false) {
        while (($datos = fgetcsv($handle, 0, ";")) !== false) {
            if (isset($datos[0]) && is_numeric($datos[0])) {
                $ultimoId = max($ultimoId, (int)$datos[0]);
            }
        }
        fclose($handle);
    }
    return $ultimoId + 1;
}

$archivoCsv = "productos.csv";
$id = obtenerSiguienteId($archivoCsv);

$producto = $_POST["producto"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];

// Abrir archivo en modo añadir
$archivo = fopen($archivoCsv, "ab");
fputcsv($archivo, [$id, $producto, $descripcion, $precio], ";");
fclose($archivo);

// Redirigir de vuelta al formulario
header("Location: ./form.html");
exit;
?>
