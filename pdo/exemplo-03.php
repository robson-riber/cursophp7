<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "Robson@77");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Jose";
$password = "998877";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Comando executado com sucesso!";

?>