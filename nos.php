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
    <header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                  
                    <a class="navbar-brand" href="index.php">One World Domestic</a>
                    
                </div>

    <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <li><a href="index.php" ><i class="fas fa-home"></i>Home</a></li>
                        <li><a href="modal.html">Sobre Nós</a></li>
                        <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Tipos de Trabalhos</a>
        <div class="dropdown-content">
          <a href="#" style="color: black;">Diarista</a>
          <a href="#" style="color: black;">jardineiro</a>
          <a href="#" style="color: black;">Cuidador de Idoso</a> 
          <a href="#" style="color: black;">Cuidador de Pets</a>
          <a href="#" style="color: black;">Cozinheiro</a>
          
        </div>
        </li>
                        <li><a href="cadastrar.html">Cadastrar</a></li> 
                        <li><a href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a></li>                        
                    </ul>
                </div>
            </div>

        </nav>

        
    </header>
   

   
        <div id="Corpo">
<h2 id="logado">Digite algumas informações</h2>
<form id="logado" action="adiciona.php" method="POST">
  <input type="text" name="nome" placeholder="Digite seu nome"><br><br>
  <input type="text" name="Tipo_domestico" placeholder="Digite seu Tipo de Trabalho Domestico"><br><br>
  <input id="envia" type="submit" value="enviar">
</form>
<a id="sair" href="logout.php">Sair</a>
  
  </div>
   

          <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates"></a>One World domestic
                </div>
                
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="modal.html">Sobre Nós</a></li>
                        <li><a href="cadastrar.html">Cadastrar</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
  </body>
</html>