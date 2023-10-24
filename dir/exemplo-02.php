<?php 

$imagens =  scandir("imagens");

$data = array();

//var_dump($imagens);

foreach ($imagens as $img) {
	
	if (! in_array($img, array(".", ".."))){

		$filename = "imagens" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);

		$info["tamanho"] = filesize($filename);

		$info["modificado"] = date("d/m/Y H:i:s", filemtime($filename));

		$info["url"] = "http://localhost/dir/" . str_replace("\\", "/", $filename) ;

		array_push($data, $info);	

		//var_dump($info); 

	}
}

echo json_encode($data);
//echo json_encode($data[0]["filename"]);

 ?>