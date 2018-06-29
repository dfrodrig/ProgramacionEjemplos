<?php
echo "Cagandoles la mente".'<br>';
$input=$_POST['input'];
 $input1=$_POST['input1'];

 
 $mensaje='<input id="limpiar" type="button" value="limpiar">';
 $mensaje.='<br>'.$input.'<br>';
 $mensaje.=$input1;
  printf($mensaje);
?>