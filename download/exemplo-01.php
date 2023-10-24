<?php 

$link = "http://salotextecidos.com.br/wp-content/uploads/elementor/thumbs/2-q8q340gx8qvr052u0qtmrtp7vg0yxirr79lrxj5c38.png" ;

$content = file_get_contents($link);

//var_dump($content);

$parse = parse_url($link);

//var_dump($parse);
//echo "<br>";
//var_dump(basename($parse["path"]));


$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);


?>


<img src="<?=$basename?>">