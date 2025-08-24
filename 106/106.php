<?php
//106.php
// Redimensionar imagen jpg con PHP
// Cambia el tamaño de una imagen jpg y la guarda en un nuevo archivo
$origen = "logos/logo.jpg";
$destino = "logos/logonuevo.jpg";
$destino_temporal = tempnam("tmp/", "tmp");
redimensionar_jpeg($origen, $destino_temporal, 300, 350, 100);

// guardar la imagen
copy($destino_temporal, $destino);

// mostrar la imagen
echo "<img src='logos/logonuevo.jpg'>";

function redimensionar_jpeg($img_original, $img_nueva, $img_nueva_anchura, $img_nueva_altura, $img_nueva_calidad)
{
    // crear una imagen desde el original
    $img = imagecreatefromjpeg($img_original);
    // crear una imagen nueva
    $thumb = imagecreatetruecolor($img_nueva_anchura, $img_nueva_altura);
    // redimensionar la imagen original copiándola en la imagen nueva
    imagecopyresized($thumb, $img, 0, 0, 0, 0, $img_nueva_anchura, $img_nueva_altura, imagesx($img), imagesy($img));
    // guardar la nueva imagen redimensionada donde se indica en $img_nueva
    imagejpeg($thumb, $img_nueva, $img_nueva_calidad);
    imagedestroy($img);
    imagedestroy($thumb);
}
?>
