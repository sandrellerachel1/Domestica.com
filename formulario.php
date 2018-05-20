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
<body>


<?php

include'cabecalho.php';

?>







<section id="page">
      <div id="Corpo">
        <center>
          <form id="cadastro" required name="cadastro" method="post" action="email.php">
      
            <table background="gainsboro" class="tabela" width="625" border="0">
            <tr>
              <center>
          <h2>Fale Conocsco</h2>
          <p> 
           Agradecemos por você querer fazer parte do nosso time , em breve entraremos em contato com você
          </p></center>
        </center></tr>
      <div class="col-md-6 hidden-xs hidden-sm text-center">
        </table>
              <div class="col-md-6 hidden-xs hidden-sm text-center">
       
        <div class="form-row">
   
  
  <div class="form-group col-md-10">
    <label for="inputNomecompleto">Nome Completo</label>
    <input type="text" name="nome" class="form-control" id="inputNomecompleto" placeholder="">
  </div>
  
          
         <div class="form-group col-md-12">
         <label for="email">Email</label>
         <input class="form-control" id="email" name="email" placeholder="example@example" >
          </div>
        
  <div class="form-group col-md-10">
    <label for="inputNomecompleto">Nos Mande Uma Mensagem</label>
    <input type="textarea" name="text" class="form-control" id="inputTexto" placeholder="Mensagem">
  </div>
          

 </table>
 <div class="form-group col-md-19">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
    </form>
    
  </div>
  
  </div>
    </section>












































<section class="email" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <center><h2 class="section-heading text-uppercase">Fale Conosco</h2></center>
            <center><h3 class="section-subheading text-muted">Agradecemos por você querer fazer parte do nosso time , em breve entraremos em contato com você.</h3></center>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <center><form id="contactForm" name="Enviado, em breve entraremos em contato com você." action="email.php" method="POST" novalidate bacground="#DCDCDC">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" name="nome" placeholder="Nome Completo" required data-validation-required-message="Por Favor insira o seu nome completo.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" name="email" placeholder="E-mail" required data-validation-required-message="Por Favor insira o seu  e-mail.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" name="whatsapp" placeholder="WhatsApp" required data-validation-required-message="Por Favor insira o seu WhatsApp">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" name="mensagem" placeholder="Nos Mande uma Mensagem" required data-validation-required-message="Campo em branco, Fale Conosco."></textarea>
                    <p class="help-block text-danger"></p>

                    <input type="submit" value="Enviar">
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
</div>
</div>
</form></center>
</div>
</div>
</div>
</section>


<?php

include 'rodape.php';
?>
