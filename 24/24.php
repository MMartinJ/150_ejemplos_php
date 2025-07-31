<?php
// filepath: c:\xampp\htdocs\Contenido_web_Los_150_mejores_ejemplos\24\24.php
// Define el título de la ventana
$nombre_titulo = "Los mejores ejemplos en PHP";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Documento sin titulo</title>
</head>
<body>
    <!-- El título de la ventana ya se establece desde PHP en la etiqueta <title> -->
    <!-- Si quieres cambiarlo dinámicamente con JavaScript, puedes hacerlo así: -->
    <script>
        document.title = "<?php echo addslashes($nombre_titulo); ?>";
    </script>
</body>
</html>