<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One World Domestic</title>
    <link rel="stylesheet" type="text/css" href="cadas.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  


      </head>
  <body class="homepage">   
  <<?php include 'cabecalho.php'; ?>

   
        <div id="Corpo">
<center>
   <h1 id="login">Login</h1>
<form id="login" action="ala.php" method="POST">
  <table>
    <tr>
    <td>Login: </td>
    <td><input type="text" name="login" placeholder="login"></td>
    </tr>
    <tr>
    <td>Senha: </td>
    <td><input type="password" name="senha" placeholder="Senha"></td>
    </tr>
  </table>
  <input id="enviar" type="submit" value="Enviar">
</form>
  </center>
  </div>
   
  <?php include 'rodape.php'; ?>
  
  </body>
</html>