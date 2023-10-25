<?php 

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_hight = 256;

//var_dump( getimagesize($file))
//$data = getimagesize($file);
//$width = $data[0];
//$hight = $data[1];

list($old_width, $old_hight) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_hight);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled(
	$new_image, // nova imagem - destino
	$old_image, // imagem de origem
	0, //posição x,y eixo
	0,
	0,
	0,
	$new_width, // nova largura
	$new_hight, // nova altura)
	$old_width,
	$old_hight
);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);




?>