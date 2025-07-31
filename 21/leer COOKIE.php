<?php
if (isset($_COOKIE["dat"])) {
    $sum = $_COOKIE["dat"];
    echo "La COOKIE está creada con el valor = " . $sum . "<br>";

    if ($sum == 0) {
        echo "La COOKIE no está creada";
        exit;
    }

    // Incrementar el valor de la cookie en 1
    echo "Despues de incrementar en uno el valor de la cookie es = " . ($sum = $sum + 1); // Creo un contador

    setcookie("dat", $sum); // Guardo la cookie con un valor incrementado

    echo "<br><br>COOKIE GUARDADA = " . $sum . "<br>"; // Muestro el nuevo valor guardado
} else {
    echo "La COOKIE no está creada";
}
?>


