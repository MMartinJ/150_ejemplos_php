<?php
$archivo = "visitas.txt";

// Si se ha pulsado el botón de reinicio
if (isset($_POST['reset'])) {
    file_put_contents($archivo, 0);
    $visitas = 0;
    //refrescamos la pagina para que haga la primera visita
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
} else {
    // Abrir o crear el archivo
    $file = fopen($archivo, "c+");
    if (!$file) {
        die("No se pudo abrir el archivo de visitas.");
    }

    // Bloqueo para evitar conflictos
    flock($file, LOCK_EX);

    // Leer el valor actual
    $contenido = stream_get_contents($file);
    $visitas = (int) $contenido;

    // Incrementar
    $visitas++;

    // Guardar nuevo valor
    ftruncate($file, 0);
    rewind($file);
    fwrite($file, $visitas);

    // Liberar bloqueo y cerrar
    flock($file, LOCK_UN);
    fclose($file);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de visitas</title>
</head>
<body>
    <p>Visitas número: <?= $visitas ?></p>

    <form method="post">
        <button type="submit" name="reset">Reiniciar contador</button>
    </form>
</body>
</html>
