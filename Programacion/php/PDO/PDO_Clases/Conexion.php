<?php
require_once "config.php";
   class Conexion{
   protected $conect;

   function __construct(){
   	$this->conect=new mysqli(host,user,pass,db);
   	if ($this->conect->errno){
   echo 'Error en la conexion'.$this->conect->errno;
   return;
   	}
   	$this->conect->set_charset(caracteres);
  }
}
?>