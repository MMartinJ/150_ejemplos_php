<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enviar valor de variable</title>
</head>
<?
// Enviar el valor hola de la variable &mensaje a un archivo PHP llamado ver.php
$mensaje="hola";
?>
enviar el mensaje "hola" <a href="ver.php?mensaje=<? echo $mensaje ?>"> click aquí</a> 
<body>
</body>
</html>