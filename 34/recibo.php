<?php 
echo "Nombre: ". $_POST["nombre"]; 
echo "<br>Apellidos: ". $_POST["apellidos"]; 
echo "<br>E-mail: ". $_POST ["email"]; 
$cervezas=$_POST["cerveza"]; 

//recorremos el array de cervezas seleccionadas. No olvidarse q la primera posición de un array es la 0
for ($i=0;$i<count($cervezas);$i++)    
 {     
 echo "<br> Cerveza " . $i . ": " . $cervezas[$i];    
 } 
?> 

