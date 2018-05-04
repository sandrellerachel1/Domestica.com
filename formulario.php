<!DOCTYPE html>
<html lang="en">
  <head>
    <title>One World Domestic</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://w3layouts.com/wp-content/themes/w3layouts/css/style-web.css?18Nov2016">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css">
<link href="https://w3layouts.com/wp-content/themes/w3layouts/fonts/icons.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="https://w3layouts.com/wp-content/themes/w3layouts/js/web/flexy-menu.js"></script>
<script type="text/javascript" src="https://w3layouts.com/wp-content/themes/w3layouts/js/web/move-top.js"></script>
<script type="text/javascript" src="https://w3layouts.com/wp-content/themes/w3layouts/js/web/easing.js"></script>
<script type="text/javascript" src="https://w3layouts.com/wp-content/themes/w3layouts/js/jquery.magnific-popup.js"></script>
<meta name="google-site-verification" content="pmhrR3CsQPEpuw32hx8i9G3Tm45rV0rb8psQ2Y-kG6Y">


    <link rel="stylesheet" type="text/css" href="cadas.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    



      </head>


<?php

include'cabecalho.php';

?>


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
            <center><form id="contactForm" name="Enviado, em breve entraremos em contato com você." action="email.php" method="POST" novalidate>
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