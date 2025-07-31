<html>
<head>
<style type="text/css">
.rojo {
	color: #F00;
}
</style>
</head>

<body>

<form name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>">
<p>Este texto debe verse en todo momento para poder verificar la autolectura dentro de un mismo <span class="rojo">archivo PHP</span></p>
<p>Empresa: </font> <INPUT CLASS="campo" NAME="empresa" size="40">
  Nombre y Apellidos: </font> <INPUT CLASS="campo" NAME="nombre" size="40">
  <font face="Comic Sans MS">
  <INPUT CLASS="botón" TYPE="Submit" VALUE="Enviar">
</font></p>

<?php

  // Fecha de alta
  //$tiempo=time();
//  $fecha=date("d-m-y",$tiempo);
  $hora = date(" H:i:s",time());


  // verificamos si se envio la variable, y saludamos LAS TRANSFORMA DE HTML A PHP
  if (isset($_POST['empresa']))
  { 
  $id_empresa = $_POST['empresa'];
  $empresa =$id_empresa;
  $id_nombre = $_POST['nombre'];
  $nombre =$id_nombre;

  // Mostramos el mensaje
  echo "<BR>";
  echo "<font face='verdana' size='2' color='#FF8C00'>Gracias ".$empresa ." se ha  guardado correctamente los datos"."</font>"."	<BR>";	
  echo "Empresa: ".$empresa."<BR>"."Nombre y Apellidos: ".  $nombre;
  }
echo "<BR>".$hora;

// Se inicia una actualizacion transcurrido 5 segundos.
  header( "refresh:20; url=54.php" ); 

//<!-- El siguiente script refrescara la pagina transcurridos los 5 segundos. -->
//<meta http-equiv="refresh" content="5"/>

?>



</BODY>
</FROM>
</HTML>
