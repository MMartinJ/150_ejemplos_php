<? 
// Nos conectamos a la BD
$link = mysql_connect("localhost","nhjukvlb_ejemplo","phpya101","");
mysql_select_db("nhjukvlb_libro101", $link);


// Creamos el campo combo en HTML y enviamos la selección al archivo drecibido.php
//$consulta= mysql_query ("SELECT agenda FROM telefono",$link); 

mysql_query ("SET NAMES 'utf8'");
$consulta=mysql_query("select id,nombre from agenda",$link) or
die("Problemas en el select:".mysql_error());


echo '<form name="form1" action="datos.php" method="post">'; 
echo '<select multiple name="miSelect" size="5">'; 
echo '<option value="0">Seleccione </option>'; 
  
//por cada registro encontrado en la tabla me genera un <option> 
//while ($rows = mysql_fetch_array($consulta)){ 
//echo '<option value="'.$rows['error'] . '" >' . $rows['error'].'</option>';  
//}; 

while($row = mysql_fetch_array($consulta))
{
echo'<OPTION VALUE="'.$row['id'].'">'.$row['nombre'].'</OPTION>';
};

//Lo envia al archivo datos.php con el valor del seleccionado de la lista
echo '</select>'; 
echo '<input type="Submit" name="Submit" Value="Enviar" />'; 
echo '</form>'; 
mysql_free_result($consulta); // Liberar memoria usada por consulta. 
?> 


<body>
</body>
</html>
