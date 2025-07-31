<?php
// filepath: c:\xampp\htdocs\Contenido_web_Los_150_mejores_ejemplos\25\25.php

// Establece la zona horaria a Madrid
date_default_timezone_set("Europe/Madrid");

// Muestra mensaje inicial
echo "Contador: tiempo restante que queda para las 23:59:59 de hoy<br>";

// Obtiene la fecha y hora actual
$year = date("Y"); // Año completo (ej: 2025)
$month = date("m");
$day = date("d");
$hour = 23;
$minute = 59;
$second = 59;

// Función para calcular el tiempo restante hasta una fecha/hora dada
function countdown($year, $month, $day, $hour, $minute, $second) {
    $countdown_date = mktime($hour, $minute, $second, $month, $day, $year);
    $now = time();
    $diff = max(0, $countdown_date - $now); // No permite valores negativos

    $days = floor($diff / 86400);
    $hours = floor(($diff % 86400) / 3600);
    $minutes = floor(($diff % 3600) / 60);
    $seconds = $diff % 60;

    // Devuelve un array con días, horas, minutos y segundos
    return [$days, $hours, $minutes, $seconds];
}

// Calcula el tiempo restante
//Esa línea de código en PHP está utilizando desestructuración de arrays con list() 
//para asignar valores individuales a variables desde el resultado de la función countdown()
list($dl, $hl, $ml, $sl) = countdown($year, $month, $day, $hour, $minute, $second);

// Formatea las horas, minutos y segundos con dos dígitos
$hl = str_pad($hl, 2, "0", STR_PAD_LEFT);
$ml = str_pad($ml, 2, "0", STR_PAD_LEFT);
$sl = str_pad($sl, 2, "0", STR_PAD_LEFT);

// Prepara los datos para guardar en el archivo
$horas = "&mimensaje={$hl}&";
$minutos = "&minuts={$ml}&";
$segundos = "&segund={$sl}&";

// Guarda los datos en el archivo tiempo.txt
file_put_contents("tiempo.txt", $horas . "\n" . $minutos . "\n" . $segundos . "\n");

// Muestra el resultado al usuario
echo "Horas: $hl, minutos: $ml, segundos: $sl<br>";
echo "El tiempo se ha guardado en el servidor para poder usarlo en otro momento, en el archivo (tiempo.txt)";
?>