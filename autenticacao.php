<?php  

session_start();

$user = $_POST['usuario'];
$pw = $_POST['senha'];

$usuarios=array(
"janio",
"suellen",
"fabiana",
"sandrelle"

	);

$senhas=array(
"senha01",
"senha02",
"senha03",
"senha04"

	);
$i_user= array_search($user, $usuarios);
$i_pw=array_search($pw , $senhas);

if ($i_user == $i_pw && in_array($user , $usuarios)) {
	
	$_SESSION['user'] = $user;

	header('location: do_login.php');
}else{
		header('location: login.php');
}


?>
