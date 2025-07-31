<?php

$EntraDato=$_POST["nombre"]; //recibo el dato a buscar

echo "Buscar el registro a eliminar: " . $EntraDato. "<BR>";
echo "<BR>"; // retorno de carro

//Lectura de archivo.
$miarchivo = "leer.txt";

// Abrimos fichero de clientes
$abrir_archivo = fopen($miarchivo,"rb") or die ("No se puede abrir el fichero especificado");

// Busco en el archivo los registros linea por linea BUCLE hasta final del fichero
while (!feof($abrir_archivo))
{
$linea= fgets($abrir_archivo,1024);
$cadena = rtrim($linea); //Elimino los espacios en blanco MUY IMPORTANTE!!!!

//Busco un registro en concreto y lo muestro si existe
if ($cadena<>$EntraDato){ //Primer registro
echo "Lista de registros: " .$cadena. "<BR>";

//Copio los registros que no coinciden en un archivo nuevo llamado ficha
$FileName = "ficha";
//$cont=nombre;
$fp = fopen($FileName.".txt","a");
fwrite($fp,"$cadena\r\n");
fclose($fp);
}
}//fin while

fclose($abrir_archivo);
//Elimino el archivo
unlink("leer.txt");
//Renombro el fichero
rename ("ficha.txt", "leer.txt");

echo "<br>"."El registro ".$EntraDato." ha sido eliminado correctamente";
?>
