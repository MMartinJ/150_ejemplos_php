<?php
// Abrir el archivo CSV
$archivo = fopen("productos.csv", "rb");

if ($archivo === false) {
    die("No se pudo abrir el archivo CSV.");
}

// Saltar cabecera si existe (opcional)
// fgetcsv($archivo, 0, ";");

$productos = [];

// Leer todas las filas
while (($aDatos = fgetcsv($archivo, 0, ";")) !== false) {
    // Evitar filas vacías o con ID inválido
    if (!isset($aDatos[0]) || !is_numeric($aDatos[0]) || $aDatos[0] <= 0) {
        continue;
    }
    $productos[] = $aDatos;
}

fclose($archivo);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Listado de Productos</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f5f5;
        margin: 0;
        padding: 20px;
    }
    h1 {
        text-align: center;
        margin-bottom: 30px;
    }
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }
    .card {
        background: white;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .card img {
        max-width: 100%;
        height: auto;
        border-radius: 4px;
        margin-bottom: 10px;
    }
    .id {
        font-size: 0.8em;
        color: #888;
        margin-bottom: 5px;
    }
    .producto {
        font-weight: bold;
        font-size: 1.2em;
        margin-bottom: 5px;
    }
    .descripcion {
        font-size: 0.9em;
        color: #555;
        margin-bottom: 10px;
    }
    .precio {
        font-size: 1.1em;
        color: #27ae60;
        font-weight: bold;
    }
</style>
</head>
<body>

<h1>Listado de Productos</h1>
<div class="grid">
<?php foreach ($productos as $p): ?>
    <div class="card">
        <div class="id">ID_PRODUCTO: <?= htmlspecialchars($p[0]) ?></div>
        <div class="producto"><?= htmlspecialchars($p[1]) ?></div>
        <div class="descripcion"><?= htmlspecialchars($p[2]) ?></div>
        <div class="precio"><?= htmlspecialchars($p[3]) ?> €</div>
        <?php if (!empty($p[4])): ?>
            <img src="<?= htmlspecialchars($p[4]) ?>" alt="<?= htmlspecialchars($p[1]) ?>">
        <?php endif; ?>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>
