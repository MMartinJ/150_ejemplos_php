<?php
// Mostrar el valor de la cookie "autentificado" (forma moderna)
if (isset($_COOKIE["autentificado"])) {
    echo "Valor de la cookie 'autentificado': " . $_COOKIE["autentificado"] . "<br><br>";
} else {
    echo "La cookie 'autentificado' no está disponible.<br><br>";
}

// Listar todas las cookies disponibles en el navegador
if (!empty($_COOKIE)) {
    echo "Cookies disponibles en el navegador: <br>";
    foreach ($_COOKIE as $nombre => $valor) {
        echo htmlspecialchars($nombre) . " : " . htmlspecialchars($valor) . "<br>";
    }
} else {
    echo "No se encontraron cookies en el navegador.";
}
?>
