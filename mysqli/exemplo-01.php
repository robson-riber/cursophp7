<?php 

$conn = new mysqli("localhost", "root", "Robson@77", "dbphp7");
 
if ($conn->connect_error){

	echo "Error: " . $conn->connect_error;
	exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $passwd);

$login = "user";
$passwd = "1234567";

$stmt->execute();


?>