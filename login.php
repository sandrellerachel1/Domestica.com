<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imagens/favicon.ico">
    <title>ONe World Domestic</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  

</head>
  <body class="homepage">   
  <?php include 'cabecalho.php'; ?>

   
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
