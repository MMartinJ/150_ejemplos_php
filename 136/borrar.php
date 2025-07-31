<?php
// Eliminar un registro - recibo el dato del registro de la BD a eliminar
$borrar = $_GET['borrar'];
$mysqli = new mysqli("localhost", "nhjukvlb_ejemplo", "phpya101", "nhjukvlb_libro101");

// Verificar la conexión
if ($mysqli->connect_errno) {
    echo "Error al conectar con la base de datos: " . $mysqli->connect_error;
    exit;
}

if (isset($borrar)) {
    $sql = "DELETE FROM agenda WHERE id = $borrar";
    if ($mysqli->query($sql)) {
        echo "Los datos se han borrado con éxito";
    } else {
        echo "Error al borrar los datos: " . $mysqli->error;
    }
} else {
    echo "Debe especificar un 'id'.";
}
// Cerrar la conexión
$mysqli->close();
?>
