
<?php
// Nos conectamos a la base de datos
$link = mysql_connect("localhost","nhjukvlb_ejemplo","phpya101","");
mysql_select_db("nhjukvlb_libro101", $link);

mysql_query ("SET NAMES 'utf8'");
$consulta=mysql_query("select id,nombre from agenda",$link) or
die("Problemas en el select:".mysql_error());
// Creamos el campo combo en HTML y enviamos la selección al archivo drecibido.php
echo '<form name="form1" action="recibidos.php" method="post">'; 
echo '<select name="miSelect">'; 
echo '<option value="0">Seleccione </option>'; 
  
while($row = mysql_fetch_array($consulta))
{
echo'<OPTION VALUE="'.$row['id'].'">'.$row['nombre'].'</OPTION>';
};

echo '</select>'; 
echo '<input type="Submit" name="Submit" Value="Enviar" />'; 
echo '</form>'; 
mysql_free_result($consulta); // Liberar memoria usada por consulta. 
?> 
