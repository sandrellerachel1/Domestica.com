<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="imagens/favicon.ico">
    <title>One World Domestic</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css.css" rel="stylesheet">
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
                        
            <li><a href="index.php" >Home</a></li>
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
            <li><a href="#myModalf"  data-toggle="modal">Cadastre-se</a></li>
            <li><a href="formulario.php">Fale Conosco</a></li> 
            <li><a href="#myModal" data-toggle="modal">Entrar</a></li>                      
        </ul>
                </div>
            </div>
        </nav>


<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="imagens/avatar.png" alt="Avatar">
                </div>              
                <h4 class="modal-title">Login</h4>   
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" required="required">     
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Senha" required="required"> 
                    </div>        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 



<div id="myModalf" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h3 class="modal-title">Cadastrar-Se Como</h3></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center><a href="contratante.php"><button  type="button" class="btn btn-primary">Contratante</button></a></center>
        <center><a href="trabalhador.php"><button  type="button" class="btn btn-primary">Trabalhador</button></a></center>
      </div>
      <div class="modal-footer">
    
      </div>
    </div>
  </div>
</div>
        
    </header>

    
