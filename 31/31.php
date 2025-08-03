<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Randomize</title>
</head>
<body>
<?php
// Bucle para generar y mostrar 10 números aleatorios
for ($a = 0; $a < 10; $a++) {
    $numero = rand(0, 100); // Genera un número aleatorio entre 0 y 100
    echo "El número aleatorio es: $numero <br>";
}
?>
</body>
</html>
