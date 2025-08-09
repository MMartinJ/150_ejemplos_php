<?php
header('Content-Type: text/html; charset=UTF-8');

$web = "https://www.google.es"; // Ejemplo de web
$asunto = "Te envío información importante";
$cuerpo = "¡Hola! Te envío este contenido porque creo que te puede interesar y pensé en compartirlo contigo: " . $web;

// Codificamos los parámetros para que funcionen correctamente en la URL
$asuntoCodificado = rawurlencode($asunto);
$cuerpoCodificado = rawurlencode($cuerpo);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Compartir por correo</title>
    <style>
        .email-btn {
            display: inline-block;
            margin: 10px 0 0 35px;
        }
        .email-btn img {
            width: 31px;
            height: 31px;
        }
    </style>
</head>
<body>
    <p>Botón compartir correo:</p>
    <a class="email-btn" href="mailto:?subject=<?= $asuntoCodificado ?>&body=<?= $cuerpoCodificado ?>" title="Compartir por correo">
        <img src="compartir.png" alt="Compartir por correo">
    </a>
</body>
</html>
