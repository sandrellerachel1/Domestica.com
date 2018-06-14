<?php 
session_start();

include_once("conexaot.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$contato= filter_input(INPUT_POST, 'contato', FILTER_SANITIZE_STRING);
$frequencia = filter_input(INPUT_POST, 'frequencia', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail:$email <br>";

$result_usuarios = "INSERT INTO usuarios (nome, sexo, telefone, email, senha, contato, frequencia, created) VALUES ('$nome', '$sexo', '$telefone', '$email', '$senha', '$contato', '$frequencia', NOW())";
$resultado_usuarios = mysql_query($conn, $result_usuarios);

if (mysql_insert_id($conn)) {
	$_SESSION['msg'] = "<p style='color:grenn;'>Usuário Cadastrado Com Sucesso</p>";

	header("location: trabalhador.php");
} else {
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi Cadastrado Com Sucesso</p>";
	header("location: index.php");
}

 ?>

