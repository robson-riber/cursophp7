<?php

$nome = $_GET["r"];

//converte para inteiro
$valor = (int)$_GET["v"];

$ip = $_SERVER['REMOTE_ADDR'];

//exemplo para criar log
$pagina =$_SERVER['SCRIPT_NAME'];

echo "página acessada: " . $pagina;

echo "meu ip é: " . $ip;


var_dump($nome);

var_dump($valor);

?>