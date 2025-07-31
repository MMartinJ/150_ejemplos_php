
<?php
//detecta y saluda en el idioma del usuario que visita en mi web
$mi = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "El idioma del usuario es: " . $mi . "<br>";
if (strpos($mi, 'es') === 0) {
    echo "Bienvenido a mi página web";
} else {
    echo "Welcome to my page web";
}
?>