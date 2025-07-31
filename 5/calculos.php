<HTML>
<HEAD>
<TITLE>Tablas</TITLE>


<?php

$pnumero = $_POST["pnumero"];
$snumero = $_POST["snumero"];

echo "Suma = " . ($pnumero + $snumero) . "<br>";
echo "Resta = " . ($pnumero - $snumero) . "<br>";
echo "Multiplicacion = " . ($pnumero * $snumero) . "<br>";
echo "Division = " . ($pnumero / $snumero) . "<br>";

?>

</HEAD>
<BODY>