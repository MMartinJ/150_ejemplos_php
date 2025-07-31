<?php
// recibo datos del formulario
$id="1"; // se crea un id para cada producto (no creado hay que hacer el código) 1.html es de ejemplo
$producto = $_POST["producto"]; //busco el registro del campo nombre
$concepto = $_POST["concepto"]; //busco el registro del campo nombre
$precio = $_POST["precio"]; //busco el registro del campo nombre


// Crear un excel con PHP CSV
   $linea  =$id.",".$producto.",".$concepto.",".$precio.",".$path;

// Abrimos el archivo situando el puntero al final del archivo:
     $archivo = fopen( "productos.csv", "ab" );
     fputcsv( $archivo, split(",", $linea), ";" );
     fclose( $archivo );
?>