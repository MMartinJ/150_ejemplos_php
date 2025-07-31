

<?php
// Recibimos el valor de las variables del Formulario
$nombre = $_POST["nombre"];
$telefono = $_POST['telefono'];

// conecta con la BD
$link = mysqli_connect("localhost", "nhjukvlb_ejemplo", "phpya101", "nhjukvlb_libro101");
if (!$link) {
    die("No se pudo conectar al SERVIDOR: " . mysqli_connect_error());
}

//Introducimos el nombre y el telefono
$sql = "INSERT INTO agenda (nombre, telefono) VALUES ('$nombre', '$telefono')";
$result = mysqli_query($link, $sql);
if ($result) {
    echo "Hemos recibido sus datos y guardados con éxito.\n";
    echo "NOMBRE " . $nombre . " TELEFONO " . $telefono;
} else {
    echo "Error al guardar los datos: " . mysqli_error($link);
}

// Cerrar la conexión
mysqli_close($link);
?>