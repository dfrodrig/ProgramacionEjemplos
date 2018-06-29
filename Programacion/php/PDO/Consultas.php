<?php
//ENCASO DE QUE HAYA UN HTML se coloca la variable en el array execute 
//$busqueda=$_POST['name'];
  try{
    $conexion=new PDO('mysql:host=localhost; dbname=supedido','root','');
      $conexion->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER SET UTF8");
         //array asociativo
          //$sql="SELECT * FROM usuario_login WHERE ID_Usuario=:USER";
            $sql="SELECT * FROM cliente WHERE id=?";
             //busqueda del html oncatenADO con el asociativo
              //$resultado=$conexion->prepare(":USER"=>$busqueda);
                 $resultado=$conexion->prepare($sql);
                    $resultado->execute(array(1));
                  
                while($lista=$resultado->fetch(PDO::FETCH_ASSOC)){
                	echo "NOMBRE ". $lista['nombre'];

                }

      }catch(Exception $e){
        die("Error".$e->getMessage());
          echo "Error en la linea".$e->setLine();
        }finally{
        	$conexion=null;
    }

?>