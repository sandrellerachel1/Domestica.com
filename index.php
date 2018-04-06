

<!DOCTYPE html>
<html lang="en">
<head>
  <title>One World Domestic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>One World Domestic</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

	<nav class="navbar navbar-default">

  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Sobre Nós</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Cadastrar</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

		
			
	</div></center>

	<div id="Corpo">

<?php


session_start();

if (!isset($_SESSION['user'])) {

   header('location: login.php');

  }

   echo "BEM VINDO";

?>

</div>

	<div id="rodape">
	<center><ul> <div class=footer></div>
			<td><li><a>Fabiana Nayara da Silva Bezerra  <br>(fnfabianabe@gmail.com) <br> - (81) 9 8583-5379</a></li></td> 
		  <td><li><a>Janio Vinicius Ramos Cajueiro  <br>(janiovinicius17@gmail.com) <br> -(81) 9 8676-9119</a></li></td> 
		 	<td><li><a>Sandrelle Rachel Rodrigues Bezerra  <br>(sandrellesantos23@gmail.com) <br> - (81) 9 9495-9361</a></li></td> 
			<td><li><a>Suellen Barbosa da Cruz <br>(suellenbarbosa.c@hotmail.com) <br> - (81) 9 8971-5026</a></li></td> 
		</ul></center>
	
	</div>

</body>
</html>









