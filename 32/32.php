

<?php
$numero = rand(1, 4);
echo "El número aleatorio es: $numero <br>";

if ($numero == 1) {
    echo "es igual a 1";
    header("Location: 1.php");
} elseif ($numero == 2) {
    echo "es igual a 2";
    header("Location: 2.php");
} elseif ($numero == 3) {
    echo "es igual a 3";
    header("Location: 3.php");
} elseif ($numero == 4) {
    echo "es igual a 4";
    header("Location: 4.php");
}

exit(); // Esta línea es opcional, pero se recomienda para asegurar que no se ejecute más código después de la redirección.
?>