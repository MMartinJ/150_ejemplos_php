

<?php
$SalarioTrabajador = 1500;
$Impuesto = 18; // Porcentaje 
$SueldoReal = $SalarioTrabajador - (($SalarioTrabajador / 100) * $Impuesto);

echo "Sueldo del trabajador sin impuesto: $SalarioTrabajador<br>";
echo "Con el impuesto: $SueldoReal";
?>