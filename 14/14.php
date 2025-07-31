<?php 

// Hora en Madrid (España) 
putenv('TZ=Europe/Madrid'); 
$hora_espana = date("H:i:s"); 

// Hora en Los Angeles California (USA) 
putenv('TZ=America/Los_Angeles'); 
$hora_los_angeles = date("H:i:s"); 

// Segundos transcurridos desde el 01-01-1970 
$utc = time(); 

// Una forma de expresar la fecha 
$fecha1 = date("d-m-Y H:i"); 

// Otra forma de expresar la fecha 
$fecha2 = date("l F d-m-Y H:i:s"); 

// Semana del año 
$semana_anio = date ("W");  

// Dia del año 
$dia_anio = date ("z");  

echo " 
En Madrid la hora es: $hora_espana <br> 
En Los Angeles la hora es: $hora_los_angeles <br> 
Segundos desde 01-01-1970: $utc <br> 
Una forma de presentar la fecha y hora: $fecha1 <br> 
Otra forma de expresar la fecha y hora : $fecha2 <br> 
Estamos en la semana $semana_anio del año <br> 
Hoy es el dia $dia_anio del año <br> 
";  
?>
