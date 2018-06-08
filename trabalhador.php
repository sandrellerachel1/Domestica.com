<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="imagens/favicon.ico">
    <title>ONe World Domestic</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css.css">
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  

</head>
<body>
<?php 
include 'cabecalho.php';
 ?>
<section id="page">
        <div id="Corpo">



 <center>
    <form action="PROJETOEMPRATICA/addT.php" id="cadastro" required name="cadastro" method="post" action="cadastro.php">
        <table background="gainsboro" class="tabela" width="625" border="0">
        	<tr>
            	<center>
         			<h2>Cadastre-se Como Trabalhador</h2>
          		</center>
        	</tr>
      </table>
</center>         

<div class="trabalhe col-md-6 hidden-xs hidden-sm text-center">
    <div class="form-row">
    	<div class="form-group col-md-10">
        	<label for="nome">Digite Seu Nome</label>
         	<div class="form-control-validation">
         		<input class="form-control" id="nome" name="nome" placeholder="Nome Completo" value="" data-parsley-required="" data-parsley-telefone="" data-parsley-id="93" type="tel">
          	</div>
        </div>

    	<div class="form-group col-md-10">
         	<label for="sexo">Informe o Sexo</label>
         	<div class="form-control-validation">
         		<input type="radio" value="Masculino" name="Sexo" id="sexo" /><label>Masculino</label>
				<input type="radio" value="Feminino" name="Sexo" id="sexo" /><label>Feminino</label>
          	</div>
        </div>


        <div class="form-group col-md-10">
        	<label for="celular">Digite Seu Número</label>
         	<div class="form-control-validation">
         		<input class="form-control" id="telefone" name="telefone" placeholder="(00) 0000-0000" value="" data-parsley-required="" data-parsley-telefone="" data-parsley-id="93" type="tel">
          	</div>
        </div>

        <div class="form-group col-md-10">
         	<label for="celular">Digite seu Email</label>
         	<div class="form-control-validation">
         		<input class="form-control" id="email" name="email" placeholder="exemople@exemple" value="" data-parsley-required="" data-parsley-telefone="" data-parsley-id="93" type="email">
          	</div>
        </div>

		<div class="form-group col-md-10">
      		<label for="selectContato">Como deseja que o contratante entre em Contato?</label>
      		<select id="contato" name="Contato"  value="Contato" class="Contato" placeholder="Contato">
            	<option selected>Selecione...</option>
        		<option>Ligação</option>
        		<option>Whatsapp</option>
        		<option>Email</option>
       		</select>
    	</div>


    	<div class="form-group col-md-10">
			<label for="frequencia">Frequência</label>
			<select id="frequencia" name="frequencia" class="form-control">
  				<option selected>Selecione....</option>
        		<option>Segunda a Sabado </option>
        		<option>Segunda a Sexta</option>
        		<option>3x na Semana</option>
        		<option>2x na Semana</option>
        		<option>Quinzena</option>
			</select>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>
 

 	</table>
 	</div>
    </form>    
  </div>   
    <table background="gainsboro" class="tabela" width="625" border="0">
        <div class="col-md-6 hidden-xs hidden-sm text-center">
       		<ul class="list-unstyled">
          		<li class="registre-step">
        		 <img src="imagens/feche.jpg" width="100%" height="50%">    
        		</li>
         	</ul>
        </div>
    </table>
</section>
 
  


         <?php 
         include 'rodape.php';

         ?>
    
  </body>
</html>
