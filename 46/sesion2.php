<?php
 //  Crear o retomar la sesión
 session_start();
 
 // Mostrar el nombre de la sesión 
 echo 'La sesión actual se llama: '.session_name()."<br>"; 

 // Mostrar el identificador de la sesión 
 echo 'La sesión actual tiene este identificador: '.session_id()."<br>";
 
?>
 <a href=sesion1.php>Volver</a><br>