<?php
 // Registra la variable
 session_register($productos);

 // Crea o retoma la sesión
 session_start(); 
?>
 Añadir producto:<br>
 <form action=carrito2.php method=post>
  <select name=prod>
   <option name=video>V&iacute;deo</option>
   <option name=dvd>DVD</option>
   <option name=ordenador>Ordenador</option>
  </select>
 <input type=text name=num size=2>
 <input type=submit value=Enviar>
 </form>
