<html lang="es">
<head>
<meta charset="UTF-8">
<title>Redirigir pagina anterior</title>
</head>
<?php
if(isset($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    // Si no hay una página anterior, redirige a una página por defecto
    header('Location: ../100/100.html');
}
exit;
?>
<body>
</body>
</html>