<?php  
include 'init.php';

$user = $_POST['usuario'];
$senha = $_POST['senha'];

if(login($user,$senha)){
	header('location:entrando.php');
}

else{
	header('location:login.php');
}
?>
