<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Redirigir pagina anterior</title>
</head>
<?php
if(isset($_SERVER['HTTP_REFERER'])) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    // Si no hay una página anterior, redirige a una página por defecto
    header('Location: formulario.php');
}
exit;
?>
<body>
</body>
</html>