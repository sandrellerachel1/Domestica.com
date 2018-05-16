<?php
$filename = 'animals_data.txt';
$id = $_GET['id'];

$file = file($filename);
unset($file[$id]);
file_put_contents($filename, $file);
header("location:index.php");

?>