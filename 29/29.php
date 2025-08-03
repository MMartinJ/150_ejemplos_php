<?php
// filepath: c:\xampp\htdocs\Contenido_web_Los_150_mejores_ejemplos\29\29.php

/* 
Este script solo permite el acceso si la página fue referida desde una URL específica.
Por ejemplo, para que enviar-contacto.php solo pueda ser accedida desde contacto.php.
*/

// URL permitida como referente
$referer_permitido = "http://www.google.com";

// Verifica si HTTP_REFERER está definido y coincide con la URL permitida
if (!isset($_SERVER["HTTP_REFERER"]) || $_SERVER["HTTP_REFERER"] !== $referer_permitido) {
    echo "No puedes acceder a esta página desde aquí.";
    exit(); // Finaliza el script si no cumple la condición
}

// Aquí va el resto del código de la página si el acceso es válido
?>