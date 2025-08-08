<?php
if (file_exists("mifichero.txt")){ 
   echo "El fichero existe."; 
   $reffichero = fopen("mifichero.txt", "a"); 
}else{ 
   echo "El fichero no existe. Lo creo."; 
   $reffichero = fopen("mifichero.txt", "w+"); 
} 
?> 
