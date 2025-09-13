<?php

$nombre = $_GET['nombre'];

$dsn = "mysql:host=localhost;dbname=test";
$pdo = new PDO($dsn,'root','');

$sql = "SELECT imagen FROM agenda WHERE nombre=:nombre";

$stmt = $pdo->prepare($sql);

$stmt->execute(
    ['nombre' => $nombre]
);

$result = $stmt->fetch();
$imagen = $result[0];

echo '<img src='.$imagen.' >';


?>