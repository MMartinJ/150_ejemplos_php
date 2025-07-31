<?php
// Conectamos a la BD
$link = mysql_connect("localhost","nhjukvlb_ejemplo","phpya101","");
mysql_select_db("nhjukvlb_libro101", $link);
$result = mysql_query("SELECT * FROM agenda", $link);

// Ahora hago una petición para que me muestre todos los registros de la tabla acceso	
$query = "SELECT * from agenda";
$result = mysql_query($query);

// Preparo la Tabla

echo "<table width=\"500\" border= \"0\" align =\"center\" cellpadding =\"5\"  cellspacing =\"3\">";

echo "<tr bgcolor=\"#DDDDDD\">";

// Parte fija de la tabla
echo "  <td width=\"150\"> <center><b> Numero     </b></center></td>\n";
echo "  <td width=\"150\"> <center><b> Nombre   </b></center></td>\n";
echo "  <td width=\"150\"> <center><b> Telefono     </b></center></td>\n";

// Parte dinámica de la tabla

while ($row=mysql_fetch_row($result))
{
echo " <tr bgcolor=\"#EEEEEE\">\n";
echo "   <td>$row[0]</td>\n";
echo "   <td>$row[1]</td>\n";
echo "   <td>$row[2]</td>\n";
echo " </tr>\n";
}
echo "</table>\n";
?>
