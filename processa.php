<?php 
session_start();

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail:$email <br>";

$result_usuarios = "INSERT INTO usuarios (nome, telefone, email, senha, estado, cidade, endereco, bairro, created) VALUES ('$nome', '$telefone', '$email', '$senha', '$estado', '$cidade', '$endereco', '$bairro', NOW())";
$resultado_usuarios = mysql_query($conn, $result_usuarios);

if (mysql_insert_id($conn)) {
	$_SESSION['msg'] = "<p style='color:grenn;'>Usuário Cadastrado Com Sucesso</p>";

	header("location: contratante.php");
} else {
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi Cadastrado Com Sucesso</p>";
	header("location: index.php");
}

 ?>

