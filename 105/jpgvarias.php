<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Abrir imagenes aleatorias con rnd</title>
<style type="text/css">
#apDiv1 {
	position:absolute;
	left:310px;
	top:128px;
	width:137px;
	height:212px;
	z-index:1;
}
</style>
</head>
<?php 

$total = "2"; // Numero total de imagenes 
$extension = ".jpg";// Definimos la extension, puede ser .jpg, gif, bmp, etc. 
$carpeta = "fondos";//Carpeta con las imagenes 
// De aqui para abajo no es necesario modificar nada 
$start = "1"; 
$random = mt_rand($start, $total); 
$image_name = $random . $extension; 
echo "<img src='$carpeta/$image_name' border='0'>"; 
?> 

<body>
<div id="apDiv1">
<?php include "aleatorias.php"; ?> 
</div>
</body>
</html>