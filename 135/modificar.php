<?php
// Modificar registro de una BD
$num = $_POST["num"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
echo $telefono;
if (isset($num)){
// conecta con la BD
// Conectamos a la BD
$link = mysql_connect("localhost","nhjukvlb_ejemplo","phpya101","");
mysql_select_db("nhjukvlb_libro101", $link);

$sql = "UPDATE agenda SET nombre='$nombre', telefono='$telefono' WHERE id=$num";
$result = mysql_query($sql);
}else{
echo "Debe especificar un 'Numero'.\n";
}
echo "Los datos se han Modificado con exito";
?>



