<?php
// Configura la codificación de caracteres en la respuesta HTTP
header('Content-Type: text/html; charset=UTF-8');

$web="https://www.google.es"; //ejemplo de web

echo "Botón compartir correo <br>";

echo '<a href="mailto:?subject=Te envio información importante&body=¡Hola! Te envío este contenido porque creo que te puede interesar y pensé en compartirlo contigo: '.$web.'" title="Compartir"><img src="compartir.png" width="31px" height="31px" style="float: left; margin-left: 35px;"></a>';

?>