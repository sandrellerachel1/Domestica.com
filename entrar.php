<?php

include 'init.php';

if(logado($_SESSION['usuario'])){
	header('location:aberto.php');
}

else{
	header('location:login.php');
}

?>
<a href="logout.php">Sair</a>
