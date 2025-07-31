<?php
if (isset($_COOKIE["dat"])) {
    $sum = $_COOKIE["dat"];
    echo "Valor actual de la COOKIE = " . $sum . "<br>";

    if ($sum == 0) {
        echo "La COOKIE no está creada";
        exit;
    }

    echo "El valor de SUM es = " . $sum . "<br>"; // Valor recogido
    echo "Después de dar SUM = DAT, la cookie = " . $sum . "<br>";
    echo "Valor de la cookie = " . $sum . "<br>";
    echo "Contador = " . ($sum = $sum + 1); // Creo un contador

    setcookie("dat", $sum); // Guardo la cookie con un valor incrementado

    echo "<br><br>COOKIE GUARDADA = " . $sum . "<br>"; // Muestro el nuevo valor guardado
} else {
    echo "La COOKIE no está creada";
}
?>


