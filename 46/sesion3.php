<?php
 // Crea o retoma la sesi�n
 session_start(); 

 // Destruir la sesi�n
 setcookie(session_name(),"");
 session_destroy();
 echo "Sesi�n destru�da <br>";
?>
 <a href=sesion1.php>Volver</a>
