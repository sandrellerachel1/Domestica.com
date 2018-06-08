

       <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2018 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates"></a>One World domestic
                </div>
                
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#myModalf"  data-toggle="modal">Cadastre-se</a></li>
                        <li><a href="formulario.php">Fale Conosco</a></li>
                        <li><a href="#myModal" data-toggle="modal">Entrar</a></li>  
                    </ul>
                </div>
            </div>
        </div>


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
                <form action="autenticacao.php" method="post">
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
    </footer>
    
 
