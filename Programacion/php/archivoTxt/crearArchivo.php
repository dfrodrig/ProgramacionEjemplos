<?php
//crea el archivo de texto
$ar=fopen("archivo.txt","a") or die("Error");
$asu=$_REQUEST['asunto'];
$des=$_REQUEST['name'];

//hace el archivo
fwrite($ar,$asu);
fwrite($ar,"  ");
fwrite($ar,$des);

echo "se creo el archivo de texto";
 ?>
