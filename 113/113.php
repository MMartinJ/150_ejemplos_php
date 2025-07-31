<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Abrir imagenes aleatorias con rnd y link</title>
</head>
<?php

/*
Muestro aleatoriamente imágenes con enlaces diferentes
*/

$images = array();
$handle = opendir('images/');

while ($file = readdir($handle)) {
    $extension = substr($file, -4);

    if (($extension == '.gif') || ($extension == '.jpg') || ($extension == 'jpeg') || ($extension == '.png')) {
        $images[] = $file;
    }
}

$numImages = count($images) - 1;
$randomNum = rand(0, $numImages);

$imagesLink = array(
    "http://www.google.es",
    "http://www.dpformacio.com",
    "http://www.yahoo.es"
);

$imagePath = "images/" . $images[$randomNum];
$externalLink = $imagesLink[$randomNum];

?>

<a href="<?php echo $externalLink; ?>"><img src="<?php echo $imagePath; ?>" alt="Imagen aleatoria"></a>

<body>
</body>
</html>