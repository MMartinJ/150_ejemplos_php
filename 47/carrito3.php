<?php
// Crea o retoma la sesión
session_start();

// Muestra el contenido del carrito
$productos = $_SESSION["productos"];

echo "<br>";
if (empty($productos)) {
  echo "El carrito está vacío. <br>";
  echo "<a href=carrito1.php>Volver</a>";
  exit;
}
echo "<h1>Contenido del carrito de la compra</h1>";
echo "<h1>Productos añadidos:</h1>";

// Recorre el array de productos y muestra cada uno
$prods = array_keys($productos);
$total = count($prods);
/* for ($i = 0; $i < $total; $i++)
  echo "Producto: " . $prods[$i] . ". Unidades: " . $productos[$prods[$i]] . "<br>";
 */
foreach ($productos as $nombre => $cantidad) {
    echo "Producto: {$nombre}. Unidades: {$cantidad}<br>";
}

?>


<a href=carrito1.php>Volver</a>