<?php
 //  Crear o retomar la sesi�n
 session_start();
 
 // Mostrar el nombre de la sesi�n 
 echo 'La sesi�n actual se llama: '.session_name()."<br>"; 

 // Mostrar el identificador de la sesi�n 
 echo 'La sesi�n actual tiene este identificador: '.session_id()."<br>";
 
?>
 <a href=55.php>Volver</a><br>