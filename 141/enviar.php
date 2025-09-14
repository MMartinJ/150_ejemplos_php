<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// Validación básica
if (empty($_POST['email']) || empty($_POST['asunto']) || empty($_POST['mensaje'])) {
    exit('Faltan datos obligatorios.');
}

$nombre   = $_POST['Nombre'] ?? '';
$email    = $_POST['email'];
$asunto   = $_POST['asunto'];
$mensaje  = $_POST['mensaje'];

// Crear instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP (Papercut)
    $mail->isSMTP();
    $mail->Host       = 'localhost'; // Papercut escucha aquí
    $mail->Port       = 25;          // Puerto por defecto de Papercut
    $mail->SMTPAuth   = false;       // Papercut no requiere autenticación
    $mail->SMTPSecure = false;       // Sin cifrado en local

    // Remitente y destinatario
    $mail->setFrom('origen@test.com', 'Usuario Origen');
    $mail->addAddress($email, $nombre?: 'Destinatario de Prueba');

    // Adjuntar archivo si se ha subido
    if (!empty($_FILES['archivo1']['tmp_name'])) {
        $mail->addAttachment($_FILES['archivo1']['tmp_name'], $_FILES['archivo1']['name']);
    }

    // Contenido del mensaje
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body    = nl2br(htmlspecialchars($mensaje));
    $mail->AltBody = $mensaje; // Versión en texto plano

    // Enviar
    $mail->send();
    echo "Mensaje enviado correctamente (capturado por Papercut)";
} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}
?>