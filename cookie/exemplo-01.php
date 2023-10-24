<?php 

$data = array(
	"empresa"=>"Salotex"
);

// 1 hora = 3600 segundos
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK";
?>