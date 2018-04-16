<link rel="stylesheet" type="text/css" href="estyle.css">
<?php

include 'init.php';
$newn = $_POST['nome'];
$newe = $_POST['email'];
$newl = $_POST['login'];
$news = $_POST['senha'];

$user_new = $newn."-".$newe."-".$newl."-".$news;

$users = file("cadastro.txt");
$users[] = $user_new."\n";
$users_string = implode('', $users);

file_put_contents('cadastro.txt', $users_string);

?>

<h1 id="ca">Seja bem vindo</h1>

<a href="login.php">
<input id="ter" type="submit" value="Aqui"></a>
