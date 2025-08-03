<?php
// filepath: c:\xampp\htdocs\Contenido_web_Los_150_mejores_ejemplos\33\recibo.php

// Recupera los valores enviados por POST y verifica si cada color fue seleccionado
if(isset($_POST['color_rojo']) ) echo "color: " .htmlspecialchars($_POST['color_rojo']). '<br>';
if(isset($_POST['color_azul']) ) echo "color: " .htmlspecialchars($_POST['color_azul']). '<br>';
if(isset($_POST['color_verde']) ) echo "color: " .htmlspecialchars($_POST['color_verde']). '<br>';

// Después puedes trabajar con las variables normalmente...
?>