
<?php
// Obtiene el timestamp actual (segundos desde 1970-01-01)
$instante = time();

// Muestra la fecha actual en formato día/mes/año
echo "La fecha es: " . date("d/m/Y", $instante) . "<br>";

// Muestra la hora actual en formato hora:minutos:segundos
echo "La Hora es: " . date("H:i:s", $instante) . "<br>";

// Si la hora actual es menor o igual a las 12:31:15
if (date("H:i:s", $instante) <= "12:31:15") {
    // Muestra este mensaje si la condición se cumple
    echo "HORA?";
} else {
    // Si no, muestra este mensaje junto con la hora actual
    echo "si se cumple: " . date("H:i:s", $instante);
}
?>
