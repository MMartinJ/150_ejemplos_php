<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title> </title>
</head>
<body>
    <?php
//Obtener solo el nombre del archivo, sin la ruta ni la extensión

echo"Obtener sólo el nombre del archivo imagenes/foto.jpg, sin la ruta ni la extensión <br>";


$path = "imagenes/fotos.jpg";
$nombreArchivo = pathinfo($path, PATHINFO_FILENAME);
echo $nombreArchivo;
?>
</body>
</html>