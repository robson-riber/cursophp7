<?php 

$cep = "02257000";

$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);

$response = curl_exec($ch);

curl_close($ch);

//parametro true transforma de objeto para array
$data =json_decode($response, true);

print_r($data);

echo "<br>";

print_r($data["localidade"]);

?>