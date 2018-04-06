<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>One World Domestic</title>
	<style>
		 body{
      margin: 0;
      background-image:url(h.jpg);
      background-attachment: fixed;
      background-size: 100%;
      background-repeat: no-repeat;
      background-color: white;
      
    }
    
    #menu {
      position:height fixed;
      top: 0;
      z-index: 99;
      height: 100%;
    }
    
    #menu ul{
      margin: 0;
      background-color: black;
      list-style: none;
    }
    #menu ul li {
      display: inline;
    }
    #menu ul li a{
      padding: 10px 10px;
      display: inline-block;

      color: white;
      text-decoration: none;
    }
    #menu ul li a:hover{
        color: red;
    }
    #Corpo {
      width: 100%; height: 1000px;
    }
    #rodape ul{
      margin: 0;
      background-color: black;
      list-style: none;
    }
    #rodape ul li {
      display: inline;
    }
    #rodape ul li a{
      padding: 10px 20px;
      display: inline-block;
      color: white;
      text-decoration: none;
    }
    #rodape ul li a:hover{
        color: red;
    }

	</style>
</head>
<body>
	<div id="bg"></div>
	<div class="box"></div>
	  <img src="">
	  <a href="" id="close"></a>
	<center><div id="menu">
		<ul>
			<li><a href="home.html">Home</a></li>
			<li><a href="cadastrar.html">Cadastrar</a></li>
			<li><a href="login.php">Entrar</a></li>
			<li><a href="modal.html">Sobre</a></li>

		</ul>
		
			
	</div></center>

	<div id="Corpo">

<?php


session_start();

if (!isset($_SESSION['user'])) {

   header('location: login.php');

  }

   echo "BEM VINDO";

?>
<h2><center><a href="sair.php">sair</a></center></h2>

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