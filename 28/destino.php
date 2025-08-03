<?php
// filepath: c:\xampp\htdocs\Contenido_web_Los_150_mejores_ejemplos\28\destino.php

/* 
Este script solo permite el acceso si la página fue referida desde una URL específica.
Por ejemplo, para que enviar-contacto.php solo pueda ser accedida desde contacto.php.
*/
// URL permitida como referente
// Asegúrate de que esta URL coincida con la ruta correcta de tu proyecto
$referer_permitido = "http://localhost/contenido_web_los_150_mejores_ejemplos/28/";


// Verifica si HTTP_REFERER está definido y coincide exactamente con la URL permitida
if (!isset($_SERVER["HTTP_REFERER"]) || $_SERVER["HTTP_REFERER"] !== $referer_permitido) {
    echo "Acceso no permitido. Solo puedes acceder desde 28.php";
    exit();
}

// Obtiene los parámetros GET
$cliente = $_GET["VarCliente"] ?? '';
$edad = $_GET["VarEdad"] ?? '';

// Muestra los datos
echo "Nombre de cliente: " . htmlspecialchars($cliente) . "<br>";
echo "Edad cliente: " . htmlspecialchars($edad) . "<br>";
?>