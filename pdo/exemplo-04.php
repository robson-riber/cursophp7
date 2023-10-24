<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "Robson@77");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Marissssssa";
$password = "558877";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Registro alterado com sucesso!";

?>