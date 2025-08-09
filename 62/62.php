<?php
header('Content-Type: text/html; charset=UTF-8');

// Archivo donde se guarda el número de visitas
$archivo = "visitas.txt";

// Verifica si el archivo existe, si no lo crea con valor 0
if (!file_exists($archivo)) {
    $crear = fopen($archivo, "w");
    fwrite($crear, "0");
    fclose($crear);
}

// Abrimos el archivo para leer
$abre = fopen($archivo, "r");
if ($abre) {
    $contenido = fread($abre, filesize($archivo));
    fclose($abre);
    $total = (int)$contenido;
} else {
    $total = 0; // Fallback en caso de error
}

// Incrementamos el contador
$total++;

// Abrimos el archivo para escribir el nuevo valor
$abre = fopen($archivo, "w");
if ($abre) {
    fwrite($abre, (string)$total);
    fclose($abre);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de Visitas</title>
    
</head>
<body>
    <p>Eres el usuario número: <strong><?= htmlspecialchars($total) ?></strong>. ¡Muchas gracias por tu visita!</p>
</body>
</html>
