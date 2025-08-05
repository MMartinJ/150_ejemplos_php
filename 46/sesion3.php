<?php
session_start(); 

// Eliminar todos los datos de la sesión
$_SESSION = [];

// Eliminar la cookie de sesión (¡fijándola con tiempo pasado!)

if (ini_get("session.use_cookies")) {
    // Obtener los parámetros de la cookie de sesión
    $params = session_get_cookie_params();
    // Eliminar la cookie de sesión
    // (fijándola con tiempo pasado)
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destruir la sesión
session_destroy();

echo "Sesión destruida <br>";
?>
<a href="sesion1.php">Volver</a>
