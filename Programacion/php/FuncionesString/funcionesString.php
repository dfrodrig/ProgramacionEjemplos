<?php
$cadenaTxt1="Saludo desde la Tierra ";
$cadenaTxt2="Saludo desde el software";
//Conexion de Strings concatenacion
$cadenaTxt3=$cadenaTxt1;
$cadenaTxt3.=$cadenaTxt2;
echo $cadenaTxt3." <br>";
//Convierte en minuscula los caracteress
echo strtolower($cadenaTxt3)."<br>";
//Convierte en Mayuscula los caracteress
echo strtoupper($cadenaTxt3)."<br>";
//Primer letra en ;Mayuscula
echo ucfirst($cadenaTxt3)."<br>";
//Palabras en mayuscula
echo ucwords($cadenaTxt3)."<br>";
//longitud de cadenas
echo strlen($cadenaTxt3)."<br>";
//Buscar un string
echo strstr($cadenaTxt3,"el")."<br>";
//remplazar por string
echo str_replace("Tierra","Planta Nuclear",$cadenaTxt3)."<br>";
//crear substring
echo substr($cadenaTxt3,129192,21212)."<br>";
//Buscar caracteres cantidad
echo strpos($cadenaTxt3,"s")."<br>";
//Buscar caracteres
echo strchr($cadenaTxt3,"S");
 ?>
