<html lang="es">
<head>
<meta charset="UTF-8">
<title>Abrir imagenes aleatorias con rnd</title>
<style type="text/css">
#apDiv {
    position: absolute;
    left: 310px;
    top: 128px;
    width: 137px;     /* ancho del marco */
    height: 212px;    /* alto del marco */
    
}

#apDiv img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;        /* ajusta al ancho del contenedor */
    height: 100%;       /* ajusta al alto del contenedor */
    object-fit: fill;  /* mantiene proporción recortando lo que sobra */
}

</style>
</head>
<?php 

$total = "4"; // Numero total de imagenes 
$extension = ".jpg";// Definimos la extension, puede ser .jpg, gif, bmp, etc. 
$carpeta = "fondos";//Carpeta con las imagenes 
// De aqui para abajo no es necesario modificar nada 
$start = "1"; 
$random = mt_rand($start, $total); 
$image_name = $random . $extension; 
echo "<div id='apDiv'><img src='$carpeta/$image_name' alt='Imagen aleatoria'></div>";

?> 

<body>
</body>
</html>