<?php
class Usuario_model{
  private $bd;
    private $usuario;

  public function __construct (){
    require_once("Modelo/conxion.php");
      $this->db=conect::conexion();
        $this->usuario=array();
  }
  function get_conexion(){

    $consulta=$this->db->query("SELECT * FROM usuario_login");
      while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
      $this->usuario[]=$fila;   
    }
    return $this->usuario;
  }
}
?>