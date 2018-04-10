<div align="center">
<?php

session_start();

if (!isset($_SESSION['user'])) {
   
    header('location: login.php');
}

echo "SEJA BEM VINDO (A), " . $_SESSION['user'] . "";

?></div>


