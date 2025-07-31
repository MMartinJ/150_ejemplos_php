
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crear cookie POST</title>
</head>
<?
// Obtener el valor del campo de formulario "miVariable" enviado por POST
$miVariable = $_POST["miVariable"];

// Establecer una cookie con el valor del campo de formulario y una fecha de vencimiento en el futuro (por ejemplo, 1 año)
$expiryTime = time() + (365 * 24 * 60 * 60); // 1 año en segundos
setcookie("miCookie", $miVariable, $expiryTime, "/");

?>
<body>
</body>
</html>
