<?php
 // Crea o retoma la sesión
 session_start(); 

    // Verifica si se ha enviado un producto
 if (isset($_POST["borrar"])) {
     // Si se ha pulsado el botón de borrar, vacía el carrito
     $_SESSION['productos'] = [];
     header("Location: carrito1.php");
     exit;
 }

    // Verifica si se ha enviado un producto
    if (isset($_POST["prod"]) && isset($_POST["num"])) {
        // Si se ha enviado un producto, lo añade al carrito
        $producto = $_POST["prod"];
        $cantidad = (int)$_POST["num"];
    
        // Verifica si el producto ya existe en el carrito
        if (isset($_SESSION['productos'][$producto])) {
            // Si ya existe, suma la cantidad
            $_SESSION['productos'][$producto] += $cantidad;
        } else {
            // Si no existe, lo añade con la cantidad especificada
            $_SESSION['productos'][$producto] = $cantidad;
        }
    }
 

?>

 Esta es una página intermedia. <br>
 <a href="carrito3.php">Continuar</a>
