
<?php
$cantidad = 2000;
$tanto = 18;

echo "El 18% de IVA de " . $cantidad . " es = " . ($cantidad * $tanto) / 100 . "<br>"; // <br> se utiliza para un salto de línea en HTML
echo "Total + 18% IVA = " . ($resul = ($cantidad * $tanto) / 100 + $cantidad); // sumamos el IVA y la cantidad
?>