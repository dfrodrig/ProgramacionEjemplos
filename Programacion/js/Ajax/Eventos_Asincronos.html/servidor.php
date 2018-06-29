<?php
echo 'Los datos han pasado por el servidor.php';
$inpt1=$_POST['inpt1'];
$inpt2=$_POST['inpt2'];
$inpt3=$_POST['inpt3'];

$mensaje='<br>'.$inpt1.'<br>';
$mensaje.=$inpt2.'<br>';
$mensaje.=$inpt3.'<br>';
$mensaje.='<input id="limpiar" type="button" value="limpiar">';
printf($mensaje);
?>