<?php
// conecta con la BD
$link = mysql_connect("localhost","nhjukvlb_ejemplo","phpya101")or die ("No se puede conectar al SERVIDOR ");
mysql_select_db("nhjukvlb_libro101", $link)or die ("No se puede conectar a la Base de Datos");

//recibo datos
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
// guardo datos
$imagen = addslashes(fread(fopen($imagen, "r"), filesize($imagen))); 
mysql_query("INSERT INTO agenda (nombre,telefono,imagen) VALUES ('$nombre','$telefono','$imagen')"); 
?>Se ha subido la imagen a la base de datos, puedes verla pulsando <a href="ver.php?nombre=<? echo $nombre ?>">aquí</a>