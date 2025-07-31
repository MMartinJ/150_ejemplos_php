<?php
// Lectura de archivo. Modo 2
$miarchivo = "lista.txt";
$abrir_archivo = fopen($miarchivo, "r");

while (!feof($abrir_archivo)) {
    $linea = fgets($abrir_archivo, 1024);

    if (trim($linea) === "zapatos") {
        echo "No cumple... ";
        echo $linea . "<br>";
    } else {
        echo "OK cumple... " . $linea . "<br>";
    }
}

fclose($abrir_archivo);
?>
