<?php

include 'init.php';

$user = $_POST['login'];
$pw = $_POST['senha'];

if (login($user, $pw)) {
    header('location:logado.php');
} else {
    header('location:login.php');
}

?>
