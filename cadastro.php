<?php


$nome = $_POST['nome'];
$sexualidade = $_POST['sexualidade'];
$telefone = $_POST['telefone'];
$dinheiro = $_POST['dinheiro'];
$frequencia = $_POST['frequencia'];
$cidade = ['cidade'];
$trabalho = ['trabalho'];


$c = $nome . "\n" .$sexualidade . "\n" .$telefone . "\n" .$dinheiro . "\n" .$frequencia . "\n" .$cidade . "\n" .$trabalho;
$d = file('dados.csv');
$d[] = $c."\n";
$d_string = implode('', $d);

file_put_contents('dados.csv', $d_string);
header('location:lista.php');
?>