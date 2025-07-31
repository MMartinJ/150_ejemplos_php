<?php
 // Crea o retoma la sesión
 session_start(); 

 // Guarda el valor
 $productos=$_SESSION["productos"];
 $productos[$_POST["prod"]]=$_POST["num"];
 $_SESSION["productos"]=$productos;

?>

 Esta es una p&aacute;gina intermedia. <br>
 <a href=carrito3.php>Continuar</a>
