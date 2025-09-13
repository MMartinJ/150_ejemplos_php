<?php

$id= $_POST["miSelect"]; 

$dsn = "mysql:host=localhost;dbname=test";
$pdo = new PDO($dsn,'root','');

$sql = "SELECT imagen FROM agenda WHERE id_agenda=:id";

$stmt = $pdo->prepare($sql);

$stmt->execute(
    ['id' => $id]
);

$result = $stmt->fetch();
$imagen = $result[0];

echo '<img src=../137'.$imagen.' >';


?>