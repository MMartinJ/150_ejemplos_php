<?php
// Archivo: descargar.php

$archivoId = $_GET['id']; // Puede ser un hash o nombre simbólico
$archivos = [
    'abc123' => ['ruta' => './resources/moto.jpg', 'descarga' => 'imagen.jpg']
];

if (!isset($archivos[$archivoId])) {
    http_response_code(404);
    exit("Archivo no encontrado.");
}

$ruta = $archivos[$archivoId]['ruta'];
$nombreDescarga = $archivos[$archivoId]['descarga'];

if (!file_exists($ruta)) {
    http_response_code(404);
    exit("Archivo no disponible.");
}

header("Content-Type: image/jpeg");
header("Content-Disposition: attachment; filename=\"$nombreDescarga\"");
header("Content-Length: " . filesize($ruta));
flush();
readfile($ruta);
?>
