<?php 
// Crear una cookie
$datos = 'Hola Mundo!!!'; // Datos que se guardarán en la cookie
// Establecer la cookie "yo" con un valor y una duración de 1 hora
// La cookie estará disponible en todo el dominio
setcookie("autentificado", $datos, time() + 3600, "/");

// Mostrar mensaje según si la cookie está disponible
if (isset($_COOKIE["autentificado"])) {
    echo "Valor de la cookie: " . $_COOKIE["autentificado"];
} else {
    echo "La cookie se ha enviado, recarga la página para verla.";
}
?>
<html>
<head>
<title>Set Test Cookie</title>
</head>
<body>
<h1>Se ha colocado la cookie</h1>
</body>
</html>
