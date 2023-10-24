<?php 

$file = fopen("log.txt", "a+");

fwrite($file, "Iniciando meu arquivo txt" . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso.";

?>