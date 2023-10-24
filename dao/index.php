<?php 

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

/*
$root = new Usuario();
$root->loadById(4);
echo $root;
*/


// consigo chamar a lista desta forma porque a função é uma static function 
// static function porque não tem nenhuma chamada $this dentro dela
//$lista = Usuario::getList();
//echo json_encode($lista);


//$search = USUARIO::search("r");
//echo json_encode($search);


$usuario = new Usuario();

$usuario->login("Marissssssa","558877");


echo $usuario ;



?>