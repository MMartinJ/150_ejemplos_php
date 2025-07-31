<?php
// filepath: c:\xampp\htdocs\Contenido_web_Los_150_mejores_ejemplos\21\21.php
// Establece una cookie llamada "dat" con valor "12" que caduca en 1 hora
setcookie("dat", "12", [
    'expires' => time() + 3600, // 1 hora
    'path' => '/',              // Disponible en todo el dominio
    'secure' => false,          // Cambia a true si usas HTTPS
    'httponly' => true,         // Solo accesible por HTTP, no JavaScript
    'samesite' => 'Lax'         // Política SameSite moderna
]);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Set Test Cookie</title>
</head>
<body>
    <h1>Se ha colocado la cookie DAT</h1>
</body>
</html>
