<?php

// conecta con la BD
try{
    $pdo = new pdo(
        'mysql:host=localhost;dbname=test;charset=utf8mb4', // DSN de conexión (Data Source Name)
        'root',                                             // Usuario de MySQL
        ''                                                  // Contraseña de MySQL (vacía en este ejemplo)
    );
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

$nombre = $_POST['nombre'];
$telefono = $_POST['telf'];
$num = $_POST['num'];

$query = "UPDATE agenda SET nombre=:nombre, telefono=:telefono WHERE id_agenda=:id_agenda";

$stmt = $pdo->prepare($query);

// Ejecutamos pasando los valores en un array asociativo
try{
    $stmt->execute([
        ':nombre'  => $nombre,
        ':telefono'=> $telefono,
        ':id_agenda'=> $num
]);
} catch (PDOException $e) {
    die("Error en la inserción: " . $e->getMessage());
}

echo "Registro modificado correctamente";

// Cerramos la conexión (opcional en PHP, se cierra al finalizar el script)
$pdo = null;



?>