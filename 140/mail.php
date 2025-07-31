
<?php
// Supuesto recibo por POST
$nombre = $_POST["nombre"];
$suscrito = $_POST["mail"];
$mensaje = $_POST["mensaje"];

echo $nombre. "<br>" ." ".$suscrito ." ". "<br> ". $mensaje ."<br>";


// Verificamos que los datos POST se hayan recibido correctamente
if (empty($nombre) || empty($suscrito) || empty($mensaje)) {
    echo "Todos los campos son obligatorios.";
    exit;
}

// La empresa recibe el correo del suscriptor
$destinatario = "pfnredes@gmail.com";
$asunto = "SUSCRIPCIÓN NUEVA - " . $nombre;

// Cabeceras para enviar un correo HTML
$mailheaders = "From: " . $suscrito . "\r\n";
$mailheaders .= "MIME-Version: 1.0\r\n";
$mailheaders .= "Content-Type: text/html; charset=utf-8\r\n";

// Construir el mensaje en formato HTML
$mensaje = "<html><body>";
$mensaje .= '<h1 style="color: blue">Nuevo suscrito</h1>';
$mensaje .= '<p>Nombre: ' . $nombre . '</p>';
$mensaje .= '<p>Correo electrónico: ' . $suscrito . '</p>';
$mensaje .= '<p>Mensaje: ' . $mensaje . '</p>';
$mensaje .= "</body></html>";

// Enviar el correo electrónico
if (mail($destinatario, $asunto, $mensaje, $mailheaders)) {
    echo "El correo se ha enviado correctamente.";
} else {
    echo "Hubo un error al enviar el correo.";
}
?>
