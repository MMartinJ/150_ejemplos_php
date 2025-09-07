

<?php
// Recibimos el valor de las variables del Formulario
$nombre = $_POST["nombre"];
$telefono = $_POST['telefono'];

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


// Consulta con marcadores de posición
$sql = "INSERT INTO agenda (nombre, telefono) VALUES (:nombre, :telefono)";

// Preparamos la consulta
$stmt = $pdo->prepare($sql);

// Ejecutamos pasando los valores en un array asociativo
try{
    $stmt->execute([
        ':nombre'  => $nombre,
        ':telefono'=> $telefono
]);
} catch (PDOException $e) {
    die("Error en la inserción: " . $e->getMessage());
}

echo "Registro insertado correctamente";

// Cerramos la conexión (opcional en PHP, se cierra al finalizar el script)
$pdo = null;

?>