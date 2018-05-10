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

   <center><form id="Encontre" required name="Profissional" method="post">
      <table width="625" border="0">
      <tr><center>
         <b><h2>Contrate o Profissional</h2></b> 
         </center>
      </center></tr>
    </table>
              <div class="col-md-6 hidden-xs hidden-sm text-center">
        <div class="form-row">
    <div class="form-group col-md-10">
      <label for="selectProfissional">Escolha um Profissional</label>
      <select name="Profissional" value="Profissional" class="form-control" placeholder="Profissional">
 				 <option selected>Profissional</option>
        <option>Segunda a Sabado </option>
        <option>Segunda a Sexta</option>
        <option>3x na Semana</option>
        <option>2x na Semana</option>
        <option>Quinzena</option>     	

      </select>
    </div>
    <div class="form-group col-md-10">
      <label for="selectFrequencia">Qual a Frequência?</label>
      <select name="Especialidade"  value="Especialidade" class="form-control" placeholder="Especialidade">
      			 <option selected>Frequência</option>
        <option>Segunda a Sabado </option>
        <option>Segunda a Sexta</option>
        <option>3x na Semana</option>
        <option>2x na Semana</option>
        <option>Quinzena</option>

      </select>
    </div>
 
          
         <div class="form-group col-md-10">
      <label for="selectContato">Como deseja que os Profissionais entre em Contato?</label>
      <select name="Especialidade"  value="Especialidade" class="form-control" placeholder="Especialidade">
      			 <option selected>Contato</option>
        <option>Segunda a Sabado </option>
        <option>Segunda a Sexta</option>
        <option>3x na Semana</option>
        <option>2x na Semana</option>
        <option>Quinzena</option>

      </select>
    </div>

  <div class="form-group col-md-10">
      <label for="selectEMensagem">Detalhe ao Profissional o que Precisa ser Feito</label>
      <textarea name="Mensagem" rows="5" cols="58" wrap="virtual"></textarea>
         </div>
  </div>        
   

 
  <button type="submit" class="btn btn-primary";>Cadastra</button>
  </table>

    </form>
    
  </div>
  <table class="tabela">
    	<section class="galeria">
	<img class="foto" src="imagens/f1.jpg"/>
	<img class="foto" src="imagens/f2.jpg"/>
	<img class="foto" src="imagens/f3.jpg"/>
</section>
    </table>

  </div>
   
    </section>
  

         <?php 
         include 'rodape.php';

         ?>
    
  </body>
</html>
