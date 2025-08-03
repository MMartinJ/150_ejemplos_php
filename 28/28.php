<?php

$cliente="Pedro";
$edad="35";

 
header("Location: destino.php?VarCliente=" . urlencode($cliente) . "&VarEdad=" . urlencode($edad));
exit();

?>