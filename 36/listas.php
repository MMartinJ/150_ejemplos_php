<?php

echo "Hola <br>";
$webs = $_POST["lil"];
echo "La variable recibida es: " . $webs . "<br>";
if ($webs == "Barcelona") {
    echo "<br> Has seleccionado " . $webs;
}

?>

