<?php
// Inicializar variable desde GET y sanitizar
$imagen = isset($_GET['imagen']) ? basename($_GET['imagen']) : null;
$buscar = "hola"; // Aquí debería ir una URL válida

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Galería de imágenes con link</title>
</head>
<body>



<?php if (!$imagen): ?>
    <?php for ($i = 1; $i <= 9; $i++): ?>
        <a href="?imagen=imagenGaleria_<?= $i ?>">
            <img src="imag/imagenGaleria_<?= $i ?>.jpg" alt="Imagen <?= $i ?>" width="100" hspace="5" vspace="5" border="1">
        </a>
        <?php if ($i % 3 === 0) echo '<br>'; ?>
    <?php endfor; ?>
<?php else: ?>
    <img src="imag/<?= htmlspecialchars($imagen) ?>.jpg" alt="Imagen seleccionada">
    <br>
    <a href="#" onclick="history.back(); return false;">Volver a la galería</a>
<?php endif; ?>

</body>
</html>
