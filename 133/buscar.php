<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: #afafaf;
            padding: 50px;
        }
        .container{
            background: white;
        }
        .columna{
            display: flex;
        }
        .celda{
            flex: 1;
            padding: 10px;
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="columna">
            <div class="celda">Nombre</div>
            <div class="celda">Telefono</div>
        </div>
        <div class="columna">
            <?php
                $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
                $sql = "SELECT * FROM agenda WHERE nombre LIKE :buscar ORDER BY nombre";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([':buscar' => "%$_POST[buscar]%"]);
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($result) {
                    $row = $result[0];
                    foreach ($result as $row) {
                        echo "<div class='celda'>" . $row["nombre"] . "</div> \n"; // Columna Nombre
                        echo "<div class='celda'>" . $row["telefono"] . "</div> \n"; // Columna Teléfono
                    }
                } else {
                    echo "No se ha encontrado ningún registro !";
                }
            ?>
        </div>
    </div>
</body>
</html>