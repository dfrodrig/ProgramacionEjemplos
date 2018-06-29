<?php
require_once("Modelo/usuario_modelo.php");


class Usuario_controlador extends Usuario_model
{
	
	function __construct()
	{
		parent::__construct();
	}

}
$usuario=new Usuario_controlador();
$matriz=$usuario->get_conexion();
require_once("Vista/usuario_view.php");
?>