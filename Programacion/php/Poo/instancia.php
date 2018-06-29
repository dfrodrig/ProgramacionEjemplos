<?php
require_once ("classFather.php");
$Andres=new Persona("Andres","Ramirez",18,false);

print "<br>"."_______________"."<br>"."Instanciamiento: ".$Andres->Nombre."<br>";
print $Andres->Hablar();
?>