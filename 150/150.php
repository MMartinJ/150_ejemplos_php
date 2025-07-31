<?php

// Si han aceptado la política
if(isset($_REQUEST['politica-cookies'])) {
    // Calculamos la caducidad, en este caso un año
    $caducidad = time() + (60 * 60 * 24 * 365);
    // Crea una cookie con la caducidad
    setcookie('politica', '1', $caducidad);
}

?>
<!DOCTYPE html>
<html>
<body>
    <div>
        <?php if (!isset($_REQUEST['politica-cookies']) && !isset($_COOKIE['politica'])): ?>
            <!-- Mensaje de cookies -->
            <div class="cookies">
                <h2>Cookies</h2>
                <p>¿Aceptas nuestras cookies?</p>
                <a href="?politica-cookies=1">Aceptar</a>
                <a href="?politica-cookies=2">No</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>