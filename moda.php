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

	<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Login</h1>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModalcad">Cadastrar</button>
			</div>

<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-target="#myModalcade">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title text-center" id="myModalLabel">Login</h4>
						</div>
						<div class="modal-body">
							<form method="POST" action="autenticacao.php" enctype="multipart/form-data">
								<div class="form-group ">
									<label for="recipient-email" class="control-label">Email:</label>
									<input name="email" type="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-group ">
									<label for="message-text" class="control-label">senha:</label>
									<input name="password" type="password" class="form-control" placeholder="Senha">
					
								</div>

								<div class="modal-footer ">
									<button type="submit" class="btn btn-success">Enviar</button>
								</div>
	
							</form>
						</div>
					</div>
				</div>
			</div>

			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			
		</script>
	</body>
</html>
