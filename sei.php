<html lang="en"><head>
<meta charset="UTF-8">
<title>Login</title>


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


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="esc.css">
</head>
<body>
<?php 
include 'cabecalho.php';
 ?>
<section id="page">
        <div id="Corpo">



 <center>
          <form id="cadastro" required name="cadastro" method="post" action="cadastro.php">
      
            <table background="gainsboro" class="tabela" width="625" border="0">
            <tr>
              <center>
          <h2>Contrate  Nossos Profissionais</h2>
          <p> 
            Encontre os
            <strong>Melhores Profissionais</strong>
            perto da sua casa.
          </p></center>
        </center></tr>
      </table>
              <div class="col-md-6 hidden-xs hidden-sm text-center">
       
        <div class="form-row">
   
  
          

<div class="form-group col-md-10">
         <label for="celular">Digite Seu Nome</label>
         <div class="form-control-validation">
         <input class="form-control" id="nome" name="nome" placeholder="Nome Completo" value="" data-parsley-required="" data-parsley-telefone="" data-parsley-id="93" type="tel">
          </div>
          </div>


  <div class="form-group col-md-10">
    <label for="inputEscolha">Escolha o Profissional</label>
<select id="inputSexualidade" name="sexualidade" class="form-control">
  <option selected>Profissional</option>
        <option>Empregad0(a) Domestico(a)</option>
        <option>Pintor(a)</option>
        <option>Cozinheiro(a)</option>
        <option>Cuidador(a) de Pets</option>
        <option>Cuidador(a) de Idosos</option>
        <option>Pintor(a)</option>
</select>
</div>
         <div class="form-group col-md-10">
         <label for="celular">Digite Seu Número</label>
         <div class="form-control-validation">
         <input class="form-control" id="telefone" name="telefone" placeholder="(00) 0000-0000" value="" data-parsley-required="" data-parsley-telefone="" data-parsley-id="93" type="tel">
          </div>
          </div>

          <div class="form-group col-md-11">
         <label for="celular">Digite seu Email</label>
         <div class="form-control-validation">
         <input class="form-control" id="email" name="email" placeholder="exemople@exemple" value="" data-parsley-required="" data-parsley-telefone="" data-parsley-id="93" type="email">
          </div>
          </div>
<div class="form-group col-md-10">
      <label for="selectContato">Como deseja que os Profissionais entre em Contato?</label>
      <select name="Especialidade"  value="Especialidade" class="form-control" placeholder="Especialidade">
             <option selected>Contato</option>
        <option>Ligação</option>
        <option>Whatsapp</option>
        <option>Email</option>
       

      </select>
    </div>


    <div class="form-group col-md-10">
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


 </table>
 <div class="form-group col-md-19">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
    </form>
    
  </div>
  





  </div>
  <center>
      
            <table background="gainsboro" class="tabela" width="625" border="0">
            
             
      <div class="col-md-6 hidden-xs hidden-sm text-center">
       
        <ul class="list-unstyled">
          <li class="registre-step">
         <img src="imagens/feche.jpg">    
           
          </li>
         </ul></table>
    </section>
  </div>
  


         <?php 
         include 'rodape.php';

         ?>
    
  </body>
</html>
