<?php
//abre el txt
$ar =fopen('archivo.txt',"r") or die ("error");
while(!feof($ar)){
  $linea=fgets($ar);
  $saltoLinea=nl2br($linea);
  echo $saltoLinea;
}
fclose($ar);
 ?>
