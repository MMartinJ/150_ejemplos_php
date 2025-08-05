<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
<title>PHP_SELF</title>
</head>
<body>

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>Empresa:
  <input class="campo" name="empresa" size="40">
    </p>
    <p>Nombre y Apellidos: 
      <input class="campo" name="nombre" size="40">
      <input class="botón" type="submit" value="Enviar">
    </p>
</form>

<?php
// Fecha de alta
$tiempo = time();
$fecha = date("d-m-y", $tiempo);
$hora = date(" H:i", time());

// Verificamos si se envió la variable y saludamos, transformando de HTML a PHP
if (isset($_POST['empresa'])) {
    $id_empresa = $_POST['empresa'];
    $empresa = $id_empresa;
    $id_nombre = $_POST['nombre'];
    $nombre = $id_nombre;

    // Mostramos el mensaje
    echo "<font face='verdana' size='2' color='#FF8C00'>Gracias $nombre, se han recibido correctamente los datos.</font><br>";
    echo "<br>";
    echo "<font face='verdana' size='2' color='#FF8C00'>Empresa $empresa</font>";
}
?>

</body>
</html>
