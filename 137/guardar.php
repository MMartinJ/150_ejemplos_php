<?php

$dsn = "mysql:host=localhost;dbname=test";

$pdo = new PDO($dsn,'root','');

$sql = "INSERT INTO agenda (nombre,telefono,imagen) VALUES (:nombre,:telefono,:imagen)";

$stmt = $pdo->prepare($sql);

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];

// Carpeta donde se guardarán los archivos
$carpetaDestino = __DIR__ . "./subidos/";
$nombreArchivo = $_FILES['imagen']['name'];

move_uploaded_file($_FILES['imagen']['tmp_name'], $carpetaDestino . $nombreArchivo);

// Guardar solo la ruta relativa en la base de datos
$rutaRelativa = "./subidos/" . $nombreArchivo;




$stmt->execute(
    ['nombre' => $nombre,
    'telefono' => $telefono,
    'imagen' => $rutaRelativa]
);

echo 'Contacto con foto de perfil agregado!<br>';

echo 'Puedes verla pulsando <a href="ver.php?nombre='.$nombre.'">aquí</a>';

?>