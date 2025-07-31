<?php
// Configura la codificación de caracteres en la respuesta HTTP
header('Content-Type: text/html; charset=UTF-8');

$web="https://www.google.es"; //ejemplo de web

echo "Botón compartir watsapp <br>";

// Boton de Whatsapp"
	echo '<a href="whatsapp://send?text=Fisik necesita tu ayuda. Haz clic en el enlace para saber más: ' . $web . '" data-action="share/whatsapp/share">
      <img src="compartir.png" width="31px" height="31px" style="float: left; margin-left: 10px;">
</a>';
?>