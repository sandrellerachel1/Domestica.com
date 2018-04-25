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
  <?php include'cabecalho.php';?>
  <div class="corpo">

    <section><center><form id="cadastro" required name="cadastro" method="post" action="cadastro.php">
      <table width="625" border="0">
      <tr><center>
          <h2>Cadastre-se</h2>
      </center></tr>


         <tr>
          <td width="69">Nome:</td>
          <td width="546"><input name="nome" type="text" id="nome" size="70" required maxlength="60" />
            <span class="style1"></span></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input name="email" type="text" id="email" size="70" required maxlength="60" />
          <span class="style1"></span></td>
        </tr>
        <tr>
          <td>Login:</td>
          <td><input name="login" type="text" id="login" required maxlength="12" />
            <span class="style1"></span></td>
        </tr>
        <tr>
          <td>Senha:</td>
          <td><input name="senha" type="password" id="senha" required maxlength="12" />
              <span class="style1"></span></td>
        </tr>
        <tr>
          <td colspan="2"><p>
            <center><input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar" /></center>
           </td>
        </tr>
      </table>
    </form>
    
  </div>
  
  </div>
    </section>


      <?php include'rodape.php';?>
    
  </body>
</html>
