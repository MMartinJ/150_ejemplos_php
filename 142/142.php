
<?php

// Supuesto POST
//$suscrito = $_POST["subscribete"];

$nombre="Pedro Fortea";
$suscrito = "pfnredes@gmail.com";

//******* a DP recibe mail del suscriptor
$destinatario = "pfnredes@gmail.com";
$asunto = "SUSCRIPCIÓN NUEVA - DP FORMACIÓ";

$mailheaders = "From: ".$suscrito;
$mensaje = "Nuevo suscrito: ".$suscrito." ".$nombre;
mail($destinatario , $asunto , $mensaje , $mailheaders );


//****** al Inscrito DP le envío un mail de respuesta
$destinatario = $suscrito;
$asunto = "Suscripción al Newsletter de DP FORMACIÓ";
$header = "From: DP Formació <dp@dpformacio.com>\n";
$header .= "Reply-To: dp@dpformacio.com\n"; //El asunto
$header .= "Content-Type: text/html\n";
$mensaje = "<BR>Gracias por haberte suscrito a nuestro newsletter, en breve recibirás nuestras promociones y descuentos.<BR>";

//enviar Imagen en el mail html incrustado
$mensaje .= "<BR><a href='http://www.dpformacio.com/webmovil/promociones.php'> <img src='http://dpformacio.com/webmovil/promociones/promo.jpg'>"; 
$mensaje .= "<BR><a href='http://www.dpformacio.com/webmovil/promociones.php'> ¿No lo ves bien? Pulsa aqui para visualizar la promoción<BR>";
mail($destinatario , $asunto , $mensaje , $header );

?>
