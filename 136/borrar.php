<?php


    $dsn = "mysql:host=localhost;dbname=test";
    $pdo = new PDO($dsn,'root','');

    $sql = "DELETE FROM agenda WHERE id_agenda=:id";
    $stmt = $pdo->prepare($sql);

    $id_agenda = $_POST['id'];

    $stmt->execute(
        ['id' => $id_agenda]
    );

    echo "El registro se ha borrado correctamente";


?>