<?php

$nome = "Robson";

function teste(){

	//global serve para pegar a variável que foi criado fora da function
	global $nome;
	echo $nome;
}

teste();

?>