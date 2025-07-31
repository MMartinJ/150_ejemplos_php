<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?
// Defino la carpeta de las imagenes y videos
 $directory = "images/";
  $images = glob($directory . "*.{jpg,jpeg,png,gif,mp4}", GLOB_BRACE);// Obtener todas las imágenes y videos en el directorio "images"

   // ordenamos las imágenes en orden alfabético
  // sort($images);

//CARGO LOS VIDEO Y LAS IMAGENES
  
   // ordenamos las imágenes por fecha de modificación, la más reciente primero
  usort($images, function($a, $b) {
  return filemtime($b) - filemtime($a);
  });
 foreach($images as $image) {
 echo '<a href="' .$image . '" target="_self">'; //al clikar muestra la imagen sola en grande

  $link = (isset($links[basename($image)])) ? $links[basename($image)] : '#'; 
  echo '<div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">';
  if(strpos($image, '.mp4') !== false) {	  
    echo '<figure>';
    echo '<video preload width="900" height="1150px" autoplay muted playsinline  loop loading="lazy">';
	echo '<figcaption>Texto de ejemplo sobre el video</figcaption>';
    echo '<source src="' . $image . '"type="video/mp4"  >';
    echo '</video>';
	echo '</figure>';
    echo "<br>";
  
  } else {
//Si no es video es imagen y la cargo y muestro
	echo'<img src="' . $image . '" width="690px" height="890px">';
	echo "<br><br>";
  }

 }
?>
<body>
</body>
</html>