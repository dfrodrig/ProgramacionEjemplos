<?php
$name="Diego";
$ape="Rodriguez";
$type="Cedula";
$document="1233503428";
$email="dfrodriguez2066@misan.com";
$pass="123";
  try{
    $conexion=new PDO('mysql:host=localhost; dbname=supedido','root','');
      $conexion->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET UTF8");
         $sql="INSERT INTO usuario_login(Nombre,Apellidos,Tipo_Documento,Documento,Email,Clave) 
            Values(:name,:ape,:type,:document,:email,:pass)";
                $resultado=$conexion->prepare($sql);
                    $resultado->execute(array(":name"=>$name,":ape"=>$ape,":type"=>$type,
                    	":document"=>$document,":email"=>$email,":pass"=>$pass));
                
       $resultado->closeCursor();
      }catch(Exception $e){
        die("Error".$e->getMessage());
          echo "Error en la linea".$e->setLine();
        }finally{
        	$conexion=null;
    }

?>