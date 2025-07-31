<?php
 // Crea o retoma la sesión
 session_start(); 

 // Muestra el contenido del carrito
 $productos=$_SESSION["productos"];
 $prods=array_keys($productos);
 for ($i=0;$i<count($prods);$i++)
   echo "Producto: ".$prods[$i].". Unidades: ".$productos[$prods[$i]]."<br>";

?>

 <a href=carrito1.php>Volver</a>
