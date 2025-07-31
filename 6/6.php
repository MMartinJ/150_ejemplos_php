<!-- Ubicar este script al comienzo de la página --> 
<?php 
$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$tiempoinicial = $mtime; 
?> 
<!-- Comienzo del código del Sitio --> 
<html>
 ...
 </html>
 <!-- Ubicar este script al final de la página --> 
<?php 
$mtime = microtime(); 
$mtime = explode(" ",$mtime); 
$mtime = $mtime[1] + $mtime[0]; 
$tiempofinal = $mtime; 
$tiempototal = ($tiempofinal - $tiempoinicial); 
echo "La página fue creada en ".$tiempototal." segundos"; 
?>