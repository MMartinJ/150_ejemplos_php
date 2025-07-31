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