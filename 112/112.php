<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Galería</title>
</head>
<body>

<?php
// Carpeta donde están las imágenes y vídeos
$directory = "images/";

// Obtenemos todos los archivos con extensiones indicadas
$images = glob($directory . "*.{jpg,jpeg,png,gif,mp4}", GLOB_BRACE);

// Ordenamos por fecha de modificación (más recientes primero)
usort($images, function($a, $b) {
    return filemtime($b) - filemtime($a);
});

// Recorremos y mostramos cada archivo
foreach ($images as $image) {

    // Enlace que abre el archivo directamente
    echo '<a href="' . htmlspecialchars($image) . '" target="_self">';

    // Contenedor centrado con flexbox
    echo '<div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">';

    // Si es vídeo
    if (strtolower(pathinfo($image, PATHINFO_EXTENSION)) === 'mp4') {
        echo '<figure>';
        echo '<video preload width="900" height="1150" autoplay muted playsinline loop loading="lazy">';
        echo '<figcaption>Texto de ejemplo sobre el video</figcaption>';
        echo '<source src="' . htmlspecialchars($image) . '" type="video/mp4">';
        echo '</video>';
        echo '</figure>';
        echo '<br>';
    } else {
        // Si es imagen
        echo '<img src="' . htmlspecialchars($image) . '" width="690" height="890" alt="">';
        echo '<br><br>';
    }

    echo '</div>';
    echo '</a>';
}
?>

</body>
</html>
