<!DOCTYPE html>
<html lang="es ">

<head>
    <title>Aplicación segura</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
    // Inicia o reanuda la sesión
    session_start();

    // Verifica si la sesión indica que el usuario está autenticado
    if (empty($_SESSION['autentificado']) || $_SESSION['autentificado'] !== 'SI') {
        header('Location: 71.php?errorusuario=si');
        exit; // Importante para detener la ejecución
    }
    ?>
    <h1>Si estás aquí es que te has autentificado</h1>
    <button onclick="location.href='71.php?cerrarsesion=si'">Cerrar sesión</button>
    <br>
</body>

</html>