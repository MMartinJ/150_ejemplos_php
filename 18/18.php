
<?php


// Elimina la cookie "yo" en la raíz
//setcookie("yo", "", time() - 3600, "/");

// Elimina la cookie "yo" en una subcarpeta (ajusta según tus rutas)
//setcookie("yo", "", time() - 3600, "/subcarpeta");

// Si usaste dominios diferentes, también debes especificarlos:
//setcookie("yo", "", time() - 3600, "/", "tudominio.com");
//setcookie("yo", "", time() - 3600, "/", "www.tudominio.com");


// Elimina la cookie "miCookie" estableciendo su fecha de expiración en el pasado
setcookie("autentificado", "", time() - 3600, "/"); // 3600 segundos = 1 hora

// Mensaje para el usuario
$mensaje = "La cookie 'autentificado' ha sido eliminada (si existía).";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar cookie</title>
</head>
<body>
    <h1><?php echo $mensaje; ?></h1>
</body>
</html>

