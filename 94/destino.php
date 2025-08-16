<?php
// This file is destino.php, which processes the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
        echo "Nombre recibido: " . $nombre;
} else {
    echo "No se ha enviado ningún dato.";
}

?>