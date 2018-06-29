<?php
require_once("Usuarios.php");
foreach($array_class as $linea){
	echo "<br>".$linea['Nombre']."  ";
	echo $linea['Apellidos']."<br>";
}
?>