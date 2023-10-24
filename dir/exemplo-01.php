<?php 

$name = "imagens";

if (!is_dir($name) ){

	mkdir($name);
	echo "Diretório criado com sucesso!";
}

 ?>