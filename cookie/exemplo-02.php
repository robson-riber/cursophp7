<?php 

if (isset($_COOKIE['NOME_DO_COOKIE'])){

	var_dump(json_decode($_COOKIE['NOME_DO_COOKIE'], true));

	echo "</br>";

	$obj = json_decode($_COOKIE['NOME_DO_COOKIE']);

	echo $obj->empresa;


}

?>