<?php
// filepath: c:\xampp\htdocs\Contenido_web_Los_150_mejores_ejemplos\22\resultado.php

// Recoge la función seleccionada y el texto enviado por POST
$a = $_POST["func"] ?? '';
$texto = $_POST["text"] ?? '';

// Lista blanca de funciones permitidas para mayor seguridad
$funciones_permitidas = ['md5', 'strlen', 'strrev', 'strtoupper', 'strtolower', 'ucwords'];


// Aplica la función seleccionada al texto
$result = $a($texto);
echo "Resultado: " . htmlspecialchars($result) . "<br>";



echo '<a href="22.html">Volver al formulario</a>';

