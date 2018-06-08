<?php

include 'init.php';

$user = $_POST['email'];
$pw = $_POST['senha'];

if (login($user, $pw)) {
    header('location:aberto.php');
} else {
    header('location:myModal');
}

?>
