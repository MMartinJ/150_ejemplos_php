<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Galería de imágenes con link</title>
</head>

<?php

$buscar = "hola";

echo $buscar;
echo "<a href=" . $buscar . "><img src='lupa.JPG'";

if (!isset($imagen)) {
    for ($i = 1; $i <= 9; $i++) {

        echo '<a xhref="?imagen=imagenGaleria_' . $i . '" mce_href="?imagen=imagenGaleria_' . $i . '" ><img src="imag/imagenGaleria_' . $i . '.jpg" src="imag/imagenGaleria_' . $i . '.jpg" border="1″ width="100″ hspace="5″ vspace="5″ /></a>';
        if ($i == 3 or $i == 6 or $i == 9) {
            echo '<br />';
        }
    }
} else {
    echo '<img src="imag/' . $imagen . '.jpg" src="imag/' . $imagen . '.jpg" /><br /><a href="http://slobos.com.ar/wp-admin/post.php#" href="http://slobos.com.ar/wp-admin/post.php#" onClick="history.go(-1);">Volver a la galeria</a>';
}
?>

<body>
</body>

</html>