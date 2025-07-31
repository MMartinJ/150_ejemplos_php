<?php
//echo $HTTP_COOKIE_VARS["yo"]; deprecated, use $_COOKIE instead
if (isset($_COOKIE["autentificado"])) {
    echo "Valor de la cookie: " . $_COOKIE["autentificado"];
} else {
    echo "La cookie no está disponible.";
}

?>

