<?php  
include 'init.php';

$user = $_POST['email'];
$senha = $_POST['senha'];

if(login($user,$senha)){
	header('location:entrando.php');
}

else{
	header('location:ala.php');
}
?>
