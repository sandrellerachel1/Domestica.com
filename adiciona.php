<?php 

$nome=$_POST['nome'];
$td=$_POST['Tipo_domestico'];

$data= file('nos.txt');
$data[]=$nome."-".$td."\n";

$data_str=implode('', $data);
file_put_contents('nos.txt', $data_str);
header('location:nos.php');

?>
