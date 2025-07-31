<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Goto error</title>
</head>
<?php


// El código utiliza la palabra clave goto para dirigirse a la etiqueta error si el archivo db/cuenta.csv no existe.


$archivo = "db/cuenta.csv";

if (!file_exists($archivo)) {
  goto error; //Va a la etiqueta error
}

$archivo = fopen($archivo, "r");

while (($aDatos = fgetcsv($archivo, 800, ";")) !== false) {
  if (isset($aDatos[1]) && $aDatos[1] == $nombreArchivo) {
    echo '<span style="color: gray; font: 24px \'Quicksand\', sans-serif;">' . $aDatos[11] . '</span>';
    echo "<br>";
    echo '<span style="color: black; font: 20px \'Quicksand\', sans-serif;">' . $aDatos[12] . '</span>';
    echo "<br>";
    echo "<br><br>";
  }
}

fclose($archivo);

error: // Salta a la etiqueta error
echo "Error: El archivo 'db/cuenta.csv' no existe.";


?>
<body>
</body>
</html>