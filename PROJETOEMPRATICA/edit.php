<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <h1> EDITAR O  CADASTRO <?=$id+1; ?></h1>
<form action="add.php" method="POST">

    <div class="form-row">
    <div class="form-group col-md-10">
    <label for="inputNomecompleto">Nome Completo</label>
    <input type="text" name="nome" class="form-control" id="inputNomecompleto" placeholder="">
    </div>
        <div class="form-group col-md-5">
          <label for="inputGenero">Genero</label>
          <select id="inputGenero" name="genero" class="form-control">
                    <option selected>Selecione...</option>
        										<option value="Masculino">Masculino</option>
        										<option value="Feminino">Feminino</option>
        										<option value="Mulher Trans">Mulher Trans</option>
        										<option value="Homem Trans">Homem Trans</option>
        										<option value="Travesti">Travesti</option>
          </select>
        </div>
          
    <div class="form-group col-xs-5">
      <label for="celular">Celular</label>
      <div class="form-control-validation">
      <input class="form-control" id="telefone" name="telefone" placeholder="(00) 0000-0000" value="" data-parsley-required="" data-parsley-telefone="" data-parsley-id="93" type="tel">
    </div>
    </div>
         
             <div class="col-md-5">
             <div class="form-group pretensao-form-group">
                <label for="prentesao">Pretensão</label>
          <div class="form-control-validation">
              <input class="form-control" id="dinheiro" name="dinheiro" placeholder="|R$| 100,0" value="" data-parsley-required="" data-parsley-telefone="" data-parsley-id="93" type="text">
          </div>
            </div>
            </div>
    
                 <div class="form-group col-md-5">
                    <label for="inputSexualidade">Frequência</label>
                    <select id="inputSexualidade" name="frequencia" class="form-control">
                           <option selected>Selecione....</option>
                           <option value="Segunda a Sabado">Segunda a Sabado </option>
                           <option value="Segunda a Sexta">Segunda a Sexta</option>
                           <option value="3x na Semana">3x na Semana</option>
                           <option value="2x na Semana">2x na Semana</option>
                           <option value="Quinzena">Quinzena</option>
                    </select>
                 </div>


                  <div class="form-group col-md-5">
                      <label for="inputCity">Cidade</label>
                      <input type="text" name="cidade" class="form-control" id="inputCity">
                  </div>
       <div class="form-group col-md-5">
            <label for="inputCategoria">Escolha uma categoria</label>
            <select id="inputCategoria" name="trabalho" class="form-control">
                     <option selected>Selecione...</option>
                     <option value="Empregada Domestica">Empregada Domestica</option>
                     <option value="Cozinheira">Cozinheira</option>
                     <option value="Bába">Bába</option>
                     <option value="Lavadeira/Engomadeira">Lavadeira/Engomadeira</option>
            </select>
       </div>
                     <input type="hidden" name="id" value="<?=$id?>">       
                     <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</body>
</html>