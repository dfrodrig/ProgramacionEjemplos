<?php
class Persona{
public $Nombre;
public $Apellido;
public $Edad;
public $Altura;
public $Hablar;
public $color;

public function __construct($Nombre,$Apellido,$Edad,$Altura){
    
    $this->Nombre=$Nombre;
    $this->Apellido=$Apellido;
    $this->Edad=$Edad;
    $this->Altura=($Altura) ? 'mas de 1.80':'menos de 1.80';

    }
    public function Hablar(){
    $this->Hablar="Hola";
     print $this->Hablar;

    } public function Color($color_piel){
    	$this->color=$color_piel;
    	print "El tipo: ".$this->color." Es el ladron";
    }
   

}


$Registro=new Persona('Diego','Rodriguez',19,true);
print "<br>"."__________"."<br>"."Nombramiento: ".$Registro->Nombre."<br>";
print $Registro->Hablar()."<br>";
$Registro->Color("Negro")."</br>";
   
?>