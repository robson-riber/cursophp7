<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=TI-ROBSON\SQLEXPRESS01;ConnectionPooling=0", "root", "Robson@77");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$result = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($result as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>" . $key . ":</strong>" . $value . "<br/>";

	}

	echo "=======================================<br/>";
}


//var_dump($result);

 ?>