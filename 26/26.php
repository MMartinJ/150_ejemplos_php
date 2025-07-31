<?php
include 'mensaje.php';
// Cinco segundos y muestra el mensaje
echo "Espera cinco segundos y muestra el mensaje <br>";
sleep(5);
/* Include - permite incluir un segundo archivo de código fuente 
dentro del actual */
echo $mensaje;
?>
<!-- porque la pagina tarda en cargar 5 segundos y despues muestra el primer echo y el segundo echo 
si quiero mostrar el primero inmediatamente y el siguiente en 5 segundos despues

Esto ocurre porque PHP ejecuta todo el código en el servidor antes de enviar la respuesta al navegador.
La función sleep(5) detiene la ejecución del script durante 5 segundos, así que nada se envía al navegador
 hasta que termina el script completo. -->