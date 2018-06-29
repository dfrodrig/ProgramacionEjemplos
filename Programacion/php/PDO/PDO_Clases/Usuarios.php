<?php
require_once "Conexion.php";
class Usuarios extends Conexion{
	function __construct(){
		parent::__construct();
	}
	function conexion_db(){

		$respuesta=$this->conect->query("SELECT * FROM usuario_login");
		$proposicion=$respuesta->fetch_all(MYSQLI_ASSOC);
		return $proposicion;
	}
}
$usuario=new Usuarios();
$array_class=$usuario->conexion_db();

?>