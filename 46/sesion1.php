<?php
 // Crear o retomar la sesi�n
 session_start();

 // Mostrar el nombre de la sesi�n 
 echo 'La sesi�n actual se llama: '.session_name()."<br>"; 

 // Mostrar el identificador de la sesi�n 
 echo 'La sesi�n actual tiene este identificador: '.session_id()."<br>";

?>
 <a href=sesion2.php>Ir a otra p�gina</a><br>
 <a href=sesion3.php>Destruir sesi�n</a><br>