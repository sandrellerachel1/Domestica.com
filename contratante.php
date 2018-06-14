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
    <form id="cadastro" required name="cadastro" method="post" action="processa.php" >
        <table  class="ttabela" width="625" border="0">
        	<tr>
            	<center>
         			<h2>Cadastre-se Como Contratante</h2>
          		</center>
        	</tr>
      </table>
</center>         

<div class="contrate col-md-6 hidden-xs hidden-sm text-center">
    <div class="form-row">
    	<div class="form-group col-md-10">
        	<label for="nome">Digite Seu Nome</label>
         	<div class="form-control-validation">
         		<input class="form-control" type="text" name="nome" placeholder="Nome Completo" >
          	</div>
        </div>

        <div class="form-group col-md-10">
        	<label for="celular">Digite Seu Número</label>
         	<div class="form-control-validation">
         		<input class="form-control" type="text" name="telefone" placeholder="(00) 0000-0000">
          	</div>
        </div>

        <div class="form-group col-md-10">
         	<label for="email">Digite seu Email</label>
         	<div class="form-control-validation">
         		<input class="form-control" type="email" name="email" placeholder="exemople@exemple" >
          	</div>
        </div>


        <div class="form-group col-md-10">
          <label for="email">Digite sua senha</label>
          <div class="form-control-validation">
            <input class="form-control" type="password" name="senha" placeholder="Senha" >
            </div>
        </div>

        <div class="form-group col-md-10">
          <label for="inputEstado">Estado</label>
         <select name="estado"  value="Estado" class="form-control" placeholder="Estado">
            <option selected>Selecione....</option>
            <option value="ac">Acre</option> 
            <option value="al">Alagoas</option> 
            <option value="am">Amazonas</option> 
            <option value="ap">Amapá</option> 
            <option value="ba">Bahia</option> 
            <option value="ce">Ceará</option> 
            <option value="df">Distrito Federal</option> 
            <option value="es">Espírito Santo</option> 
            <option value="go">Goiás</option> 
            <option value="ma">Maranhão</option> 
            <option value="mt">Mato Grosso</option> 
            <option value="ms">Mato Grosso do Sul</option> 
            <option value="mg">Minas Gerais</option> 
            <option value="pa">Pará</option> 
            <option value="pb">Paraíba</option> 
            <option value="pr">Paraná</option> 
            <option value="pe">Pernambuco</option> 
            <option value="pi">Piauí</option> 
            <option value="rj">Rio de Janeiro</option> 
            <option value="rn">Rio Grande do Norte</option> 
            <option value="ro">Rondônia</option> 
            <option value="rs">Rio Grande do Sul</option> 
            <option value="rr">Roraima</option> 
            <option value="sc">Santa Catarina</option> 
            <option value="se">Sergipe</option> 
            <option value="sp">São Paulo</option> 
            <option value="to">Tocantins</option> 
          </select>  

        </div>

        <div class="form-group col-md-10" tabindex="-1">
          <label >Cidade</label>
          <div class="form-control-validation">
            <input class="form-control" name="cidade" placeholder="Cidade" type="text">
            <label >Endereço</label>
            <input class="form-control"  name="endereco" placeholder="Rua Exemple, Nº200" type="text">
            <label >Bairro</label>
            <input class="form-control" name="bairro" placeholder="Bairro" type="text">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
		</div>
 

 	</table>
 	</div>
    </form>    
  </div>  
    <table class="tabela" width="625" border="0">    
      <div class="col-md-6 hidden-xs hidden-sm text-center">
        <ul class="list-unstyled">
          <li class="registre-step">
          <img src="imagens/contratante.jpg" width="100%" height="50%">    
          </li>
        </ul>
    </table>
</section>
  


         <?php 
         include 'rodape.php';

         ?>
    
  </body>
</html>
