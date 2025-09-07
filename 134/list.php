<?php
// Conectamos a la BD
$pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8mb4",'root','');
$sql = "SELECT * FROM agenda";


// Preparo la Tabla

echo "<table width=\"500\" border= \"0\" align =\"center\" cellpadding =\"5\"  cellspacing =\"3\">";

echo "<tr bgcolor=\"#DDDDDD\">";

// Parte fija de la tabla

echo "  <td width=\"150\"> <center><b> Nombre   </b></center></td>\n";
echo "  <td width=\"150\"> <center><b> Telefono     </b></center></td>\n";


// Ahora hago una petición para que me muestre todos los registros de la tabla acceso	
if($stmt = $pdo->query($sql)){
    while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // usar $fila aquí
    echo " <tr bgcolor=\"#EEEEEE\">\n";
    echo "   <td>{$fila['nombre']}</td>\n";
    echo "   <td>{$fila['telefono']}</td>\n";
    echo " </tr>\n";
}
echo "</table>\n";
}


?>
