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
   

   <section id="page">
        <div id="Corpo">

   <center><form id="cadastro" required name="cadastro" method="post" action="cadastro.php">
      <table width="625" border="0">
      <tr><center>
          <h2>Cadastre-se</h2>
      </center></tr>

        <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Nome Completo</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Como voçê se considera:</label>
      <select id="inputState" class="form-control">
        <option selected>Escolha Uma Opção</option>
        <option>Masculino</option>
        <option>Feminino</option>
        <option>Mulher Trans</option>
        <option>Homem Trans</option>
        <option>Travesti</option>
      </select>
    </div>
  
  <button type="submit" class="btn btn-primary">Cadastra</button>
      </table>
    </form>
    
  </div>
  
  </div>
    </section>

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
