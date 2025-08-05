<?php
// Iniciar o retomar la sesión
session_start();

// Inicializar el array si no existe aún
if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Carrito de la compra</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Carrito de la compra</h1>

    Añadir producto:<br>
    <form action="carrito2.php" method="post">
        <select name="prod">
            <option name="video">Video</option>
            <option name="dvd">DVD</option>
            <option name="ordenador">Ordenador</option>
        </select>
        <input type="text" name="num" size="2" required>
        <input type="submit" value="Enviar">
        
    </form>
    <form action="carrito2.php" method="post">
        <input type="submit" name="borrar" value="Borrar carrito">
    </form>
    <a href="carrito3.php">Ver carrito</a>
</body>

</html>