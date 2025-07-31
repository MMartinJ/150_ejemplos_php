<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<?php
//Obtener solo el nombre del archivo, sin la ruta ni la extensión

echo"Obtener sólo el nombre del archivo imagenes/foto.jpg, sin la ruta ni la extensión <br>";


$path = "imagenes/foto.jpg";
$nombreArchivo = pathinfo($path, PATHINFO_FILENAME);
echo $nombreArchivo; // Output: pfn
?>

<body>
</body>
</html>