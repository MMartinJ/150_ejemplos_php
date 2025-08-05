
<?php

//ejemplo 1 basico

function saluda($a){
    echo $a .": Bienvenido a PHP .<BR>";
}
echo saluda("Marina");

//**************************

// ejemplo 2 con calculos

function media($a,$b){
    return($a+$b)/2;
}
echo "La media es ".media(10,2)."<br>";

?>

