<link rel="stylesheet" type="text/css" href="css/js.css">
<?php 
include 'cabecalho.php'; ?>
  <body >
  

<body>
<section id="trabalhos">
<div id="corpo">
<div class="container">
<br>
  <b><h2>Perguntas Frequentes</h2></b><br>
  
<b><h2>Sou Trabalhador</h2></b>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Posso Enviar Meu Curriculo Por Email ?</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Não.Todos os processos seletivos são realizados diretamente pelo Contratante e para participar é necessário que voce se cadastre em nosso site.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Posso entrar em contato com o contratante ?</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Só será permitido você entrar em contato com o contrate, quando o mesmo lhe fizer um primeiro contato e lhe permitir que você entre em contato.</div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Eu me candidato ao serviço ou sou selecionado ?</a>
        </h4>
      </div>

      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Não será necessário se candidatar a vaga de emprego, você será selecionado pelo contratente que se interesou pelo seu perfil que será demostrado quendo o mesmo tentar procurara um trabalhador.</div>
      </div>
    </div>
  </div> 
</div>
    <br>

<div class="container">
<br>
  
<b><h2>Sou Contratante</h2></b>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Porque é necessário efetuar o cadastro ?</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse in">
        <div class="panel-body">Para que possamos saber que estamos oferecendo uma oportunidade segura para os nossos trabalhadores.Assim identificar os nossos contratantes.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Meu Contato Ficará exposto para os trabalhadores ?</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">Não. O seu contato so será utilizado por nós do site se algo acontecer, ou se o contratante trocar o contato com o trabalhador. </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Como faço para contratar um profissional ?</a>
        </h4>
      </div>

      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">Para isso você deverá ser cadastrado no site e assim será possível postar a vaga referente ao serviço que precisa. </div>
      </div>
    </div>
    <br>
  </div> 
</div>


<center><h4>Caso sua dúvida não tenha sido respondida através das questões acima, preencha o formulário abaixo para que possamos lhe ajudar.</h4></center>
<center>
<div class="col-md-12 faq_faleconosco_section-title">
            <h1 id="faleconosco">Fale Conosco</h1>
        </div>

<div id="fale">
  <div id="conteudo">
    <input type="hidden" name="conteudo">
    <div class="row">
      <div class="col-lg-12 col-md col-xs-12 col-sm-12">
      <div class="col-lg-12 col-md col-xs-12 col-sm-12">
        <h4>Continua Com Dúvidas?</h4>
        <h5>Mande uma Mensagem que nós te ajudamos.</h5>
        </div>
        </div>

        <div id="formulario">
          <div class="col-lg-12 col-md col-xs-12 col-sm-12">
            <div class="col-lg-6 col-md col-xs-6 col-sm-6">
              <div id="quem">
              <h6>Escolha seu perfil</h6>
              <input type="hidden" name="Perfil" id="perfil">
              <select name="Conteudi_quem" id="quemsou" class="form-control" onchange="SelecionaPerfil();">
                <option value="0">Selecione</option>
                <option value="1">Sou Trabalhador</option>
                <option value="2">Sou Contratante</option>
              </select>
            </div>
            </div>
    <div class="col-lg-6 col-md col-xs-6 col-sm-6">
      <h6>Assunto</h6>
      <input type="hidden" name="assunto">
      <select name="Conteudo_assunto" id="assunto" class="form-control">
        <option value="0">Selecione</option>
        <option value="1">Dúvidas</option>
        <option value="2">Elogios</option>
        <option value="3">Reclamação</option>
        <option value="4">Outros</option>
      </select>
        </div>
        </div>

    <div class="col-lg-12 col-md col-xs-12 col-sm-12">
    <div class="col-lg-12 col-md col-xs-12 col-sm-12">
      <h6>Descrição</h6>
      <textarea name="Mensagem" id="mensagem" onpaste="return false" class="form-control" maxlength="500" rows="3" placeholder="Digite Sua Mensagem"></textarea>
    </div> 
      </div>
      <div class="col-lg-12 col-md col-xs-12 col-sm-12">
      <div class="col-md-6">
      <h6>Nome Completo</h6>
      <input type="text" name="nome" maxlength="50" id="textnome" class="form-control" placeholder="Digite Seu Nome" >
        
      </div>
      <div class="col-md-6">
      <h6>Email</h6>
      <input type="text" name="email" maxlength="50" id="textEmail" class="form-control" placeholder="Digite Seu Email" >
      </div>
      </div>
      <div class="col-md-offset-4 col-md-4">
  <input type="submit" name="Enviar" value="Enviar mensagem" id="bntEnviarMensagem" class="btn btn-primary">
                                </div>
        </center>
      </div>
    </div>
  </div>
</div>
</div>
</section>

    <?php include 'rodape.php'; 
     ?>
</body>
</html>
