<?php
 // Crea o retoma la sesión
 session_start(); 

 // Destruir la sesión
 setcookie(session_name(),"");
 session_destroy();
 echo "Sesión destruída <br>";
?>
 <a href=sesion1.php>Volver</a>
