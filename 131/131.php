<?php
// Usamos un bloque try...catch para manejar posibles errores de conexión
try {
    // Creamos una nueva instancia de PDO para conectarnos a MySQL
    // Formato DSN: "mysql:host=SERVIDOR;dbname=BASE_DE_DATOS;charset=CODIFICACION"
    // En este caso: servidor local (localhost), base de datos "test" y codificación UTF-8
    $pdo = new PDO(
        'mysql:host=localhost;dbname=test;charset=utf8mb4', // DSN de conexión
        'root',                                             // Usuario de MySQL
        ''                                                  // Contraseña de MySQL (vacía en este ejemplo)
    );

    // Si la conexión es exitosa, mostramos un mensaje
    echo "Conexión correcta al servidor MySQL y base de datos seleccionada";

} catch (PDOException $e) {
    // Si ocurre un error, capturamos la excepción y mostramos el mensaje
    die("Error de conexión: " . $e->getMessage());
}
?>