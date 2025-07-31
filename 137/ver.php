<?php
$nombre = $_GET['nombre']; 
// conecta con la BD
$link = mysql_connect("localhost","nhjukvlb_ejemplo","phpya101")or die ("No se puede conectar al SERVIDOR ");
mysql_select_db("nhjukvlb_libro101", $link)or die ("No se puede conectar a la Base de Datos");
$query = "SELECT imagen FROM agenda WHERE nombre = '$nombre'"; 
$result = @MYSQL_QUERY($query); 
$imagen = @mysql_result($result,0); 
Header( "Content-type: image/jpeg"); 
echo $imagen; 
?> 