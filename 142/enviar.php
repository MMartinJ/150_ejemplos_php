<?php
// Mostrar errores en desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

// Datos simulados (en producción vendrían de $_POST)
$nombre    = $_POST['nombre'] ?? 'Pedro Fortea';
$suscrito  = $_POST['email']  ?? 'pfnredes@gmail.com';
$asuntoUsr = 'Suscripción al Newsletter de DP FORMACIÓ';

// Validación básica
if (!filter_var($suscrito, FILTER_VALIDATE_EMAIL)) {
    exit('Email inválido');
}

// Función para enviar correo con PHPMailer vía Papercut
function enviarCorreo($deEmail, $deNombre, $paraEmail, $paraNombre, $asunto, $cuerpoHtml, $cuerpoTexto = '')
{
    $mail = new PHPMailer(true);
    try {
        // Configuración SMTP Papercut
        $mail->isSMTP();
        $mail->Host       = 'localhost';
        $mail->Port       = 25;
        $mail->SMTPAuth   = false;
        $mail->SMTPSecure = false;

        // Remitente y destinatario
        $mail->setFrom($deEmail, $deNombre);
        $mail->addAddress($paraEmail, $paraNombre);

        // Contenido
        $mail->isHTML(true);
        $mail->Subject = preg_replace('/\r|\n/', ' ', $asunto);
        $mail->Body    = $cuerpoHtml;
        $mail->AltBody = $cuerpoTexto ?: strip_tags($cuerpoHtml);

        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Error al enviar a $paraEmail: {$mail->ErrorInfo}<br>";
        return false;
    }
}

// 1️⃣ Notificación al administrador
$adminEmail = 'admin@pruebas.local';
$adminAsunto = "SUSCRIPCIÓN NUEVA - DP FORMACIÓ";
$adminMensajeHtml = "Nuevo suscrito: <strong>$suscrito</strong> ($nombre)";
$adminMensajeTxt  = "Nuevo suscrito: $suscrito ($nombre)";

enviarCorreo(
    $suscrito, $nombre,           // Remitente: el usuario
    $adminEmail, 'Administrador', // Destinatario: admin
    $adminAsunto,
    $adminMensajeHtml,
    $adminMensajeTxt
);

// 2️⃣ Respuesta automática al suscriptor
$respuestaAsunto = "Suscripción al Newsletter de DP FORMACIÓ";
$respuestaHtml = "
<p>Gracias por haberte suscrito a nuestro newsletter, en breve recibirás nuestras promociones y descuentos.</p>
<p><a href='http://www.dpformacio.com/webmovil/promociones.php'>
<img src='http://dpformacio.com/webmovil/promociones/promo.jpg' alt='Promoción'></a></p>
<p><a href='http://www.dpformacio.com/webmovil/promociones.php'>¿No lo ves bien? Pulsa aquí para visualizar la promoción</a></p>
";
$respuestaTxt = "Gracias por haberte suscrito a nuestro newsletter. En breve recibirás nuestras promociones y descuentos.
Visita: http://www.dpformacio.com/webmovil/promociones.php";

enviarCorreo(
    'dp@dpformacio.com', 'DP Formació', // Remitente: empresa
    $suscrito, $nombre,                 // Destinatario: usuario
    $respuestaAsunto,
    $respuestaHtml,
    $respuestaTxt
);

echo "Suscripción procesada. Ambos correos capturados por Papercut.";

