<?php
$barcos=array(array("Tres bagones"),
              array("Dos bagones"),
              array("un bagon"),
              array("Tu vida "));

for($i=0;$i<count($barcos);$i++){
   for ($f=0;$f<count($barcos[$i]);$f++){
      echo "Barcos : ".$i." ".$barcos[$i][$f]."<br>";
   }
}
// Array multidimensional indexado
$vehiculos=array(
              "A"=>array("Moto","Carro"),
              "B"=>array("Dos bagones","Avion"),
              "C"=>array("un bagon","Submarino"),
              "D"=>array("jet ","Jet pad"));

echo " ".$vehiculos["D"][1];
?>
