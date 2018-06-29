<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	div{
		background: brown;
		padding: 100px;
		border-radius: 60px;
	    font-size: 20px;
	}
</style>
<body>
<div>
<?php
$semana[]="Lunes";
$semana[]="Martes";
$semana[]="Miercoles";

print "1. save array(PREDOMINADO): ".$semana[0];

$numero=array(1,2,3);
echo "<br>"."------------------------------------";
print "<br>"."1.1  save array (PREDOMINADO): ".$numero[1];

$datos=array("Nombre"=>"Diego","Apellido"=>"Rodriguez");
$datos["Edad"]=19;
echo "<br>"."------------------------------------";
print "<br>"."save array(ASOCIATIVO): ".$datos["Nombre"];
echo "<br>"."------------------------------------";
echo "<br> VERIFCA SI ES UN ARRAY";
if (is_array($datos)){
	echo '<br>'.'Es un array';
}else {
	echo "No es un array";
}

echo "<br>"."------------------------------------";
echo "<br> RECORRER ARRAY ASOCIATIVO";
foreach($datos as $date=>$persona){
	print "<br>Date from persont $date = $persona ";
}

echo "<br>"."------------------------------------";
echo "<br> RECORRER ARRAY PREDEFINIDO";
for($i=0;$i<count($numero);$i++){
    echo "<br>".$numero[$i];
}
?>
</div>
</body>
</html>