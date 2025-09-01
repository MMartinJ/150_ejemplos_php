<?php
// Indicamos que la salida será HTML con codificación UTF-8
header('Content-type: text/html; charset=utf-8');

// Carpeta donde están las imágenes
$path = 'imag';

// Número de imágenes que se mostrarán por página
$limit = 5;

// Array donde guardaremos los nombres de las imágenes
$list = [];

// Abrimos el directorio
if (is_dir($path)) {
    $dir = opendir($path);

    // Recorremos todos los archivos dentro de la carpeta
    while (false !== ($file = readdir($dir))) {
        // Filtramos solo los que tengan extensión .gif, .jpg o .png (mayúsculas o minúsculas)
        if (preg_match("#([a-zA-Z0-9_\-\s]+)\.(gif|GIF|jpg|JPG|png|PNG)#", $file)) {
            $list[] = $file; // Guardamos el nombre en el array
        }
    }

    // Cerramos el directorio
    closedir($dir);
}

// Contamos cuántas imágenes hay en total
$total = count($list);

// Calculamos cuántas páginas necesitamos
$paginas = ($total > 0) ? ceil($total / $limit) : 1;

// Página actual: si no está definida, empezamos en 0
$desde = isset($_GET['pg']) ? (int)$_GET['pg'] : 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Galería de imágenes</title>
<style>
    body {
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    /* Contenedor de la galería usando CSS Grid */
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 25px;
    }

    /* Cada enlace que envuelve la imagen */
    .gallery a {
        display: block;
        border: 3px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
        transition: transform 0.2s ease;
    }

    /* Efecto al pasar el ratón */
    .gallery a:hover {
        transform: scale(1.05);
        border-color: #666;
    }

    /* Las imágenes ocupan todo el ancho del contenedor */
    .gallery img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    /* Estilos para la paginación */
    .pagination {
        margin-top: 20px;
        text-align: center;
    }

    .pagination a, .pagination span {
        margin: 0 5px;
        padding: 5px 10px;
        text-decoration: none;
        border: 3px solid #ccc;
        border-radius: 3px;
        color: #333;
    }

    /* Página actual resaltada */
    .pagination span {
        background-color: #eee;
        font-weight: bold;
    }
</style>
</head>
<body>

<h1>Galería de imágenes</h1>

<!-- Contenedor de la galería -->
<div class="gallery">
<?php
// Mostramos solo las imágenes correspondientes a la página actual
for ($i = ($desde * $limit); $i < $total && $i < ($desde * $limit) + $limit; $i++) {
    if (isset($list[$i])) {
        // Cada imagen es un enlace que abre la imagen original en una nueva pestaña
        echo "<a href='$path/{$list[$i]}' target='_blank'>
                <img src='$path/{$list[$i]}' alt='Imagen'>
              </a>";
    }
}
?>
</div>

<!-- Paginación -->
<div class="pagination">
<?php
for ($p = 0; $p < $paginas; $p++) {
    $pg = $p + 1; // Número visible para el usuario
    if ($p == $desde) {
        echo "<span>$pg</span>";
    } else {
        echo "<a href='?pg=$p'>$pg</a>";
    }
}
?>
</div>

<!-- Información final -->
<p>Hay un total de <?php echo $total; ?> fotos y <?php echo $paginas; ?> páginas.</p>

</body>
</html>
