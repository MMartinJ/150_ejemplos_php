<?php
// Indicamos que la respuesta será JSON y con codificación UTF-8
header('Content-Type: application/json; charset=utf-8');

// Recogemos los campos enviados por POST. Si no existen, devolvemos cadena vacía
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Aquí podrías hacer:
// - Conexión a base de datos
// - Validación de credenciales
// - Registro de logs, etc.

// En este ejemplo, consideramos éxito si ambos campos no están vacíos
$success = !empty($username) && !empty($password);

// Preparamos la estructura de la respuesta
$response = [
    'success' => $success,
    'message' => $success
        ? 'Autenticación correcta'
        : 'Debe rellenar usuario y contraseña',
    'data' => [
        'username' => $username,
        // Nunca incluyas contraseñas reales en la respuesta en producción
        'password' => $password
    ]
];

// Devolvemos el array como JSON
echo json_encode($response);
