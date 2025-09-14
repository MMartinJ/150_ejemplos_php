<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$asunto = $_POST['asunto'];
$email = $_POST['mail'];
$mensaje = $_POST['mensaje'];

$mail = new PHPMailer(true);

try {
    // Configuración para Papercut
    $mail->isSMTP();
    $mail->Host       = 'localhost';
    $mail->Port       = 25; // o 2525 si lo configuraste así
    $mail->SMTPAuth   = false; // Papercut no requiere autenticación (en un entorno real ponlo a true)
    //$mail->SMTPAuth   = true;
    //$mail->Username   = 'correo@mi_dominio.com'; 
    //$mail->Password   = 'miclave24';
    $mail->SMTPSecure = false; // No usar TLS/SSL (en un entorno real ponlo a true)
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    // Remitente y destinatario
    $mail->setFrom('origen@test.com', 'Servidor Local');
    $mail->addAddress($email, 'Destinatario de prueba');

    // Contenido
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body    = $mensaje;
    $mail->AltBody = 'Este es un mensaje de prueba enviado a Papercut SMTP.';

    $mail->send();
    echo 'Correo enviado (revisa la ventana de Papercut).';
} catch (Exception $e) {
    echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
}
