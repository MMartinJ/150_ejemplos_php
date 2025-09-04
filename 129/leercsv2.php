<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>leer csv </title>
</head>
<body>
<?php

$nombre = $_POST["nombre"];

echo "Datos a buscar: " . $nombre . "<br>";

// Leer un CSV
$archivo = fopen("datos2.csv", "rb");

if ($archivo !== false) {
    while (($aDatos = fgetcsv($archivo, 100, ";")) !== false) {
        if ($aDatos[0] == $nombre) { // Busco el nombre si coincide
            echo "Nombre: " . $aDatos[0] . "<br>";
            echo "Apellido 1: " . $aDatos[1] . "<br>";
            echo "Apellido 2: " . $aDatos[2] . "<br>";
            echo "WEB: " . $aDatos[3] . "<br>";
            echo "--------------------------<br>";
            fclose($archivo);
            exit; // Dejo de buscar
        }
    }
    
    fclose($archivo);
    echo "No se encontraron datos para el nombre: " . $nombre;
} else {
    echo "Error al abrir el archivo.";
}

?>



</body>
</html>