<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Enviar valor de variable</title>
</head>
<?php
// Enviar el valor hola de la variable &mensaje a un archivo PHP llamado ver.php
$mensaje = "hola";
?>
enviar el mensaje "hola" <a href="ver.php?mensaje=<?= $mensaje ?>"> click aquí</a>

<body>
</body>

</html>