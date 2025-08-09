<!DOCTYPE html>
<html lang="es">
<head>
    <title>Recibo cliente</title>
    <meta charset="utf-8">
</head>
<body>
    <!-- Recibimos la variable id y la guardamos en la  
variable identificador y la imprimimos en pantalla -->

    <?php
    $identificador = $_GET['id'];

    echo "El identificador de este cliente es: $identificador";
    ?>

</body>

</html>