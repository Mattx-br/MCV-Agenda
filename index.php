<?php
	include "model\connection.php";
	include "model\pessoa.factory.php";
	include "fundo.html";
?>
<html>
<html lang="pt-BR">
	<head>
			<meta charset="UTF-8">
		<title>Agenda da turma</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="estilo.css">	  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
	</head>
	<body>	
	
	
	<div class="container">
		<h1 >Agenda da turma</h1>
		<h2 >Alunos</h2>	
		<table class="table table-dark table-striped">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Celular</th>             
				<th>Data de nascimento</th>
				<th>Ações</th>
			</tr>
			<?php
				view();
			?>
		</table>
		<a href="View/view.add.php">Cadastrar novo<br/></a>
		<a href="index.php">Atualizar</a>
		</div>
		<br/>
	
	</body>
</html>