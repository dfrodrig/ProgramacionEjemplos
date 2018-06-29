<?php
/**
* 
*/
class coche
{
	// METODO private No se pueden ingresar fuera de la clase necesitan de un getter y un setter 
	   //setter Modificar el elemento cuando se cambian los datos de la function Extends
         	//getter Ver la propiedad

	 private $name;
	    public  $rueds;
	      public $puertas;
	        protected $espejos;

function __construct($rueds,$puertas)
	{
		$this->name="renault";
		 $this->rueds=$rueds;
		  $this->puertas=$puertas;
		   $this->espejos=2;
	}

function arrancar()
    {
		print "Arranco el auto";
	}
//Nombramiento de type private 	
function get_name()
    {
	    return $this->name;
    }
function get_espejos(){
	return $this->espejos;
}
function coche_color($color,$nombre){
	$this->name=$nombre;
	   print "El coche tiene un color ".$color." de Nombre ".$this->name;
    }
    	
}

  $renault=new coche (4,5);
    print "_________________________"."<br>"."Llamar private por Getter: ".$renault->get_name()."<br>";
     print "_________________________"."<br>"."Protected Tiene: ".$renault->get_espejos()." espejos"."<br>";

/**
* 
*/
class moto extends coche
{
	
	
function __construct($rueds,$puertas)
	{
		$this->name="Pulsar";
		 $this->rueds=$rueds;
		  $this->puertas=$puertas;
		    $this->espejos=2;

	}
 function coche_color($color,$nombre){
	$this->name=$nombre;
	print "La moto tiene un color ".$color." de Nombre ".$this->name;
}	
  function set_espejos(){
  	return $this->espejos; 
  }
}
  $pulsar=new moto(2,0);
    print "_________________________"."<br>"."Llamar private: ".$pulsar->name;  
      print "<br>"."_________________________"."<br>"."Tiene ".$pulsar->rueds." llantas".
        "<br>"."_________________________"."<br>". "Setter: ";
           $pulsar->coche_color("Azul","pulsar")."<br>";
              print "<br>"."_________________________"."<br>"."Protected cambio de datos class hija : ".$pulsar->set_espejos();
?>