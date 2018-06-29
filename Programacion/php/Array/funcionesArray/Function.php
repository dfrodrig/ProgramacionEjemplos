<?php
function cubo($n)  
{  
    return($n." ".$n ." ". $n);  
}  
$a = array(1, 2, 3, 4, 5);  
$b = array_map("cubo", $a);  
print_r($b); 