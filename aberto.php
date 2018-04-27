
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One World Domestic</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	


      </head>
  <?php include 'cabecalho.php'; ?>
                   
<div class="corpo">
<div align="center">
<?php

session_start();

if (!isset($_SESSION['user'])) {
   
    header('location: login.php');
}

echo "Seja Bem Vindo" ;

?>
</div>
</div>


	
	<?php include 'rodape.php'; ?>
    

</body>
</html>



