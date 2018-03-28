<?php

session_start();

if (!isset($_SESSION['user'])) {

   header('location: login.php');

  }

   echo "Bem vindo";


?>
 
<h2><center><a href="sair.php">sair</a></center></h2>






