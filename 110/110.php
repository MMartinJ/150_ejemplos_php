<?php
// Galería de imágenes mejorada para PHP8 / HTML5 / CSS3

// Carpeta de imágenes
$carpeta = 'imag';

// Parámetro GET seguro
$imagen = filter_input(INPUT_GET, 'imagen');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Galería de imágenes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-color: #fafafa;
        }
        .galeria {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }
        .galeria a img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 2px solid #ccc;
            border-radius: 4px;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }
        .galeria a img:hover {
            transform: scale(1.05);
            border-color: #666;
        }
        .imagen-grande img {
            max-width: 90%;
            height: auto;
            border-radius: 6px;
            border: 3px solid #ccc;
        }
        .volver {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #0066cc;
            font-weight: bold;
        }
        .volver:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php if (!$imagen): ?>
    <div class="galeria">
        <?php for ($i = 1; $i <= 9; $i++): ?>
            <?php $nombre = "imagenGaleria_$i"; ?>
            <a href="?imagen=<?= urlencode($nombre) ?>">
                <img src="<?= "$carpeta/$nombre.jpg" ?>" alt="Vista previa <?= $nombre ?>">
            </a>
        <?php endfor; ?>
    </div>
<?php else: ?>
    <div class="imagen-grande">
        <img src="<?= "$carpeta/$imagen.jpg" ?>" alt="Imagen ampliada <?= htmlspecialchars($imagen) ?>">
    </div>
    <br>
    <a class="volver" href="javascript:history.back()">← Volver a la galería</a>
<?php endif; ?>

</body>
</html>
