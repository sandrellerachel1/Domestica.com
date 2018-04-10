<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron text-center">
  <h1>One World Domestic</h1>
   <p>Um caso de Amor com a Limpeza.</p> 
</div>

	
  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
      <li><a href="modal.html">Sobre Nós</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="cadastrar.html"><span class="glyphicon glyphicon-user"></span>Cadastrar</a></li>
      <li><a href="sair.php"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    </ul>
  </div>
</nav>

	<div id="Corpo">
     
      <?php
include "aberto.php";
login ($_post['u'], $_post['p']); 
 ?>
 
</div></div>

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
