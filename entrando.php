<?php

include 'init.php';

if(logado($_SESSION['user'])){
	header('location:aberto.php');
}

else{
	header('location:ei.php');
}

?>
<a href="logout.php">Sair</a>
