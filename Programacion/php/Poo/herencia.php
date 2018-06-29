<?php
require_once("classFather.php");

class Negro Extends Persona{
  public function __construct($Nombre,$Apellido,$Edad,$Altura){
    
    $this->Nombre=$Nombre;
    $this->Apellido=$Apellido;
    $this->Edad=$Edad;
    $this->Altura=($Altura) ? 'mas de 1.80':'menos de 1.80';
    
    }
    public function Hablar(){
    	parent::Hablar();
    	print " Doña tulia";
    }
     public function Color($color_Negro){
    	$this->color=$color_Negro;
    	print "EL ".$this->color." NO ES LADRON";
    }
  }
  $vaciado=new Negro("Pedro","Rodriguez",24,true);
 print "<br>"."______________________"."<br>"."Sobre Escritura Funciones (METODOS): ";
 print $vaciado->Color("_____Negro_____");
 print "<br>"."______________________"."<br>"."Adicionamiento de Datos Funciones: ";
 print $vaciado->Hablar();
?>