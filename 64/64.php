<?php
header('Content-Type: text/html; charset=UTF-8');

$web = "https://www.google.es";
$mensaje = "Fisik necesita tu ayuda. Haz clic en el enlace para saber más: " . $web;
$mensajeCodificado = urlencode($mensaje);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Compartir en WhatsApp</title>
    <style>
        .whatsapp-btn {
            display: inline-block;
            margin: 10px;
        }
        .whatsapp-btn img {
            width: 31px;
            height: 31px;
        }
    </style>
</head>
<body>
    <p>Botón compartir WhatsApp:</p>
    <a class="whatsapp-btn" href="whatsapp://send?text=<?= $mensajeCodificado ?>" data-action="share/whatsapp/share" title="Compartir en WhatsApp">
        <img src="compartir.png" alt="Compartir en WhatsApp">
    </a>
</body>
</html>
