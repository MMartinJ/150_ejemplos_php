<html>
<head>
<?php 
echo " <script language=\"JavaScript\">
  function verifica(){
  if (document.formulario.nombre.value==\"\")
	alert (\"Debe rellenar el campo nombre\");
   else
	window.location.replace(\"destino.php\")	
  } </script>";
?>
</head>
<body> 
 <form name=formulario method=post action=destino.php>
  Nombre: &nbsp;<input type=text name=nombre><br>
  <input type=button value=Enviar onClick="verifica('nombre')">
 </form>
</body>
</html>