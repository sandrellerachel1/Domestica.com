<<!DOCTYPE html>
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
    <header id="header">
      <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">One World Domestic</a>
          </div>
        <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        
                        <li><a href="index.php" ><i class="fas fa-home"></i>Home</a></li>
                        <li><a href="modal.php">Sobre Nós</a></li>
                        <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Tipos de Trabalhos</a>
        <div class="dropdown-content">
          <a href="sei.php" style="color: black;">Diarista</a>
          <a href="sei.php" style="color: black;">jardineiro</a>
          <a href="sei.php" style="color: black;">Cuidador de Idoso</a> 
          <a href="sei.php" style="color: black;">Cuidador de Pets</a>
          <a href="sei.php" style="color: black;">Cozinheiro</a>
          <a href="sei.php" style="color: black;">Pintor</a>
          
        </div>
        </li>
                        <li><a href="cadastrar.php">Quero Trabalhar</a></li> 
                        <li><a href="formulario.php">Fale Conosco</a></li> 
                        <li><a type="button" class="btn btn-xs primary" data-toggle="modal" data-target="#myModalcad">Entrar</a>
           
           
            <div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
                            <h3 class="modal-title text-center" id="myModalLabel">Login</h3>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="autenticacao.php" ">
                                <div class="form-group">
                                    <label for="recipient-name" class="control-label">Email:</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="control-label">Senha:</label>
                               <input name="password" type="password" class="form-control" placeholder="Senha">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        </li>                        </li>                        
                    </ul>
                </div>
            </div>
        </nav>
        
    </header>

    <section id="page">
      <div id="Corpo">
        <center>
          <form id="cadastro" required name="cadastro" method="post" action="cadastro.php">
      
            <table background="gainsboro" class="tabela" width="625" border="0">
            <tr>
              <center>
          <h2>Anuncie seu Serviço</h2>
          <p> 
            Seja
            <strong>contratado</strong>
            ou encontre mais
            <strong>clientes</strong>
            perto da sua casa.
          </p></center>
        </center></tr>
      <div class="col-md-6 hidden-xs hidden-sm text-center">
        <h2>Como funciona</h2>
        <br>
        <ul class="list-unstyled">
          <li class="registre-step">
         <img src="https://www.casaecafe.com/_assets/site/templates/bootstrap/img/como-profissional-icone-01.6467dffbfab8a94f48f9dc017deffe97.png">    
            <h3>Anuncie seu serviço</h3>
            <p>gratuitamente em apenas 2 minutos</p>
            <br>
          </li>
          <li class="register-step">
            <img src="https://www.casaecafe.com/_assets/site/templates/bootstrap/img/como-profissional-icone-02.67553b08e5baa6cc88e0eb0e083b4440.png"> 
            <h3>Encontre clientes ou vagas</h3></li><br>
            <li class="register-step">
              <img src="https://www.casaecafe.com/_assets/site/templates/bootstrap/img/como-profissional-icone-03.f2a4ae839a740f37df26b8cebbd22e7a.png">
              <h3>Nunca deixe de responder</h3></li></ul></table>
              <div class="col-md-6 hidden-xs hidden-sm text-center">
       
        <div class="form-row">
   
  
  <div class="form-group col-md-10">
    <label for="inputNomecompleto">Nome Completo</label>
    <input type="text" name="nome" class="form-control" id="inputNomecompleto" placeholder="">
  </div>
  <div class="form-group col-md-5">
<label for="inputSexualidade">Como voçê se considera</label>
<select id="inputSexualidade" name="sexualidade" class="form-control">
  <option selected>Escolha Uma Opção</option>
        <option>Masculino</option>
        <option>Feminino</option>
        <option>Mulher Trans</option>
        <option>Homem Trans</option>
        <option>Travesti</option>
</select>
</div>
          
         <div class="form-group col-xs-5">
         <label for="celular">Celular</label>
         <div class="form-control-validation">
         <input class="form-control" id="telefone" name="telefone" placeholder="(00) 0000-0000" value="" data-parsley-required="" data-parsley-telefone="" data-parsley-id="93" type="tel">
          </div>
          </div>
         
   <div class="col-md-5">
    <div class="form-group pretensao-form-group">
    <label for="prentesao">Pretensão</label>
    <div class="form-control-validation">
      <input class="form-control" id="dinheiro" name="dinheiro" placeholder="|R$| 100,0" value="" data-parsley-required="" data-parsley-telefone="" data-parsley-id="93" type="dinheiro">
    
    
    </div>
    </div>
    </div>
    
    <div class="form-group col-md-5">
<label for="inputSexualidade">Frequência</label>
<select id="inputSexualidade" name="frequencia" class="form-control">
  <option selected>Selecione....</option>
        <option>Segunda a Sabado </option>
        <option>Segunda a Sexta</option>
        <option>3x na Semana</option>
        <option>2x na Semana</option>
        <option>Quinzena</option>
</select>
</div>


<div class="form-group col-md-5">
<label for="inputCity">Cidade</label>
<input type="text" name="cidade" class="form-control" id="inputCity">
</div>
<div class="form-group col-md-5">
<label for="inputCategoria">Escolha uma categoria</label>
<select id="inputCategoria" name="trabalho" class="form-control">
  <option selected>Selecione...</option>
        <option>Empregada Domestica</option>
        <option>Cozinheira</option>
        <option>Bába</option>
        <option>Lavadeira/Engomadeira</option>
        <option></option>
</select>
</div>

 </table>
 <div class="form-group col-md-19">
  <button type="submit" class="btn btn-primary">Cadastra</button>
  </div>
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
                        <li><a href="cadastrar.php">Cadastrar</a></li>
                        <li><a href="formulario.php">Fale Conosco</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
  </body>
</html>
