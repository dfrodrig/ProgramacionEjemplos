<?php
class casa{
    private $estrato;
    //metodo estatic se le debe colocar private para que la gente no tenga acceso de modificar el sistema
    private static $descuento=0;
    //funcion statica donde solo permite hacer los cambios llamando la function por la clase 
    static function descuento(){
        //se utiliza para hacer un tipo de validacion de fecha en cASO de que no sea la fecha no valida
    	if (date("m-d-y")=="03-26-18"){
    	self::$descuento=4500;
    	}
    } 

    function casa($estrato){
    	if ($estrato=="Medio"){
    		$this->estrato=10000;
    	}
    }
    
    function precio(){
    	$valor=$this->estrato-self::$descuento;
    	return $valor;
       }

    }
    	$Don_Pedro=new casa("Medio");
    	//llama funcion staica para cambios
        casa::descuento();
        print $Don_Pedro->precio();
?>