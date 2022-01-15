<html>

	<head>
		<title>Cadastro</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="..\estilo.css">	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
	<video autoplay loop poster="..\video\bg-fundo.jpg" class="background">
    <source src="..\video\bg-fundo.mp4" type="video/mp4">
   </video>
	<div class="container">
		<h1>Agenda da turma</h1>
		<h2>Cadastro:</h2>
		<div class="form-group">
		<form action="../Controller/controller.add.php" action="_GET">
			Nome: <input name="nome" class="form-control" type="text"/><br/>
			E-mail: <input name="email" class="form-control" type="mail"/><br/>
			Celular: <input name="celular" class="form-control" type="text"/><br/>
			Data de Nascimento: <input name="dt_nascimento" class="form-control" type="date"/><br/>
			<input name="cadastrar" type="submit" class="btn btn-primary" value="Cadastrar"/>
		</form>
		<br/>
		<a href="../index.php">Ver todos<br/></a>
		<a href="view.add.php">Atualizar</a>
		</div>
	</body>
</html>