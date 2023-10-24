<?php 

//criando minha própria function para capturar os erros
function my_error_handler($code, $mesage, $file, $line){

	echo json_encode(array(
		"code" => $code,
		"message" => $message,
		"line" => $line,
		"file" => $file
	));
}


set_error_handler("my_error_handler");

$total = 100 / 0 ;

?>