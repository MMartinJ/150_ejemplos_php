<?php

// Este script recibe un valor por POST y lo guarda en una cookie

// Comprobar si se ha enviado el formulario por POST y el campo no está vacío
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["miVariable"])) {
    // Obtener el valor enviado por el formulario
    $miVariable = $_POST["miVariable"];

    // Establecer una cookie llamada "miCookie" con el valor recibido y duración de 1 hora
    setcookie("miCookie", $miVariable, [
        'expires' => time() + 3600, // 1 hora
        'path' => '/',              // Disponible en todo el dominio
        'secure' => false,          // Cambia a true si usas HTTPS
        'httponly' => true,         // Solo accesible por HTTP, no JavaScript
        'samesite' => 'Lax'         // Política SameSite moderna
    ]);
    //Evita que el script malicioso la lea: Si alguien logra inyectar código JavaScript en tu página (por ejemplo, mediante un ataque XSS), 
    //no podrá acceder a las cookies marcadas como HttpOnly

    //La política SameSite tiene como objetivo reducir el riesgo de ataques CSRF (Cross-Site Request Forgery).
    //Cuando la configuras como 'Lax', estás diciendo:“El navegador sí enviará esta cookie cuando el usuario visite mi sitio desde un enlace 
    //externo, pero no si es a través de acciones más sensibles 
    //como formularios POST desde otro dominio.”

    $mensaje = "Cookie 'miCookie' creada con el valor: " . htmlspecialchars($miVariable);
} else {
    $mensaje = "No se recibió ningún valor por POST.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear cookie POST</title>
</head>
<body>
    <h1><?php echo $mensaje; ?></h1>
    <a href="20.html">Volver al formulario</a>
</body>
</html>
