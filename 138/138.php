<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //conexion a la base de datos mediante pdo

    $dsn = "mysql:host=localhost;dbname=test";
    $pdo = new PDO($dsn,'root','');

    $sql = "SELECT id_agenda,nombre FROM agenda";
    $stmt = $pdo->prepare($sql);

    $stmt->execute();
    $lista = $stmt->fetchAll();
                
    ?>
    <form method="POST" action="recibidos.php">
        <select name="miSelect">
            <option value="0">Seleccione: </option>
            <?php

                foreach($lista as $item){
                    echo '<option value="'.$item[0].'"> '.$item[1].' </option>';
                }
                
            ?>
        </select>
        <input type="Submit" name="Submit" Value="Enviar" />
    </form>
</body>
</html>