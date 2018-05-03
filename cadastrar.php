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
   

   <section id="page">
        <div id="Corpo">

   <center><form id="cadastro" required name="cadastro" method="post" action="cadastro.php">
      <table width="625" border="0">
      <tr><center>
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
    <div class="form-group col-md-5">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-5">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
  </div>
  <div class="form-group col-md-10">
    <label for="inputNomecompleto">Nome Completo</label>
    <input type="text" class="form-control" id="inputNomecompleto" placeholder="">
  </div>

  <div class="form-row">
    <div class="form-group col-md-5">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-5">
      <label for="inputSexualidade">Como voçê se considera:</label>
      <select id="inputSexualidade" class="form-control">
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
<?php 
  include 'rodape.php';

 ?>
    
  </body>
</html>
