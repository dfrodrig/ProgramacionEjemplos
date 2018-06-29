<?php
require_once('clasePadre.php');
class ClaseHija extends clasePadre
{
	private $dato;
	private $dato1;
    private $dato2;
	function __construct($dato,$dato1,$dato2)
	{
		$this->Apellidos='Rodriguez Gonzalez';
		$this->dato=$dato;
        $this->dato1=$dato1;
		$this->dato2=$dato2;
	}
	public function perimetro(){
		return $this->dato1;
	}
	public function area(){
		return 'La clase: '.get_called_class().' De: '.$this->Apellidos.' esta fine';
	}

 }
 $object=new ClaseHija(32,212,21);
  echo $object->area();
?>