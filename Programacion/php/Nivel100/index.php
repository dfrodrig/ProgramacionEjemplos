<?php
if(isset($_GET['dato']) and file_exists("core/controllers/".$_GET['dato']."fila.php")){
    echo "bumm";
}else{
	echo "no";
}

?>