
<?php
if (!file_exists("visitas.txt")) {
    $file = fopen("visitas.txt", "w");
    $num = 0;
} else {
    $file = fopen("visitas.txt", "r+");
    $num = fgets($file, 20);
}
$num++;
print("Visitas número: " . $num);
fseek($file, 0); // Mover el puntero al inicio del archivo
fputs($file, $num);
fclose($file);
?>