<?php
$year = '2011';
$month= date("m");
$day = date("d");
$hour = '23';
$minute = '59';
$second = '59';
//Countdown Function
function countdown($year, $month, $day, $hour, $minute, $second)
{
  global $return;
  global $countdown_date;
  $countdown_date = mktime($hour, $minute, $second, $month, $day, $year);
  $today = time();
 $diff = $countdown_date - $today;
  if ($diff < 0)$diff = 0;
  $dl = floor($diff/60/60/24);
  $hl = floor(($diff - $dl*60*60*24)/60/60);
  $ml = floor(($diff - $dl*60*60*24 - $hl*60*60)/60);
  $sl = floor(($diff - $dl*60*60*24 - $hl*60*60 - $ml*60));
// OUTPUT
////echo "Today's date ".date("F j, Y, g:i:s A")."<br/>";
////echo "Countdown date ".date("F j, Y, g:i:s A",$countdown_date)."<br/>";
////echo "\n<br>";
$return = array($dl, $hl, $ml, $sl);
return $return;
}

countdown($year, $month, $day, $hour, $minute, $second);
list($dl,$hl,$ml,$sl) = $return;
// echo "Countdown ".$dl." days ".$hl." hours ".$ml." minutes ".$sl." seconds left"."\n<br>";
//echo $hl." hours ".$ml." minutes ".$sl." seconds left"."\n<br>";

 if ($hl == 1)$hl="01";
 if ($hl == 2)$hl="02";
 if ($hl == 3)$hl="03";
 if ($hl == 4)$hl="04";
 if ($hl == 5)$hl="05";
 if ($hl == 6)$hl="06";
 if ($hl == 7)$hl="07";
 if ($hl == 8)$hl="08";
 if ($hl == 9)$hl="09"; 

$fichero = fopen("tiempo.txt","w");

$horas = "&mimensaje=".$hl."&";
$minutos = "&minuts=".$ml."&";
$segundos = "&segund=".$sl."&";
// grabando los campos
fputs($fichero, $horas."\n");
fputs($fichero, $minutos."\n");
fputs($fichero, $segundos."\n");
//cerrando archivo
fclose($fichero);

?> 