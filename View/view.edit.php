<?php 
	include "..\model\connection.php";
	include "..\model\pessoa.factory.php";
	
	$pessoa = new pessoa();
	$idpessoa = $_GET['idpessoa'];
	echo $idpessoa;
	$pessoa->edit_bd($idpessoa);
?>
<html>
	<head>
		<title>Editar</title>
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
		<h2>Alterando os dados cadastrados</h2>
		<div class="form-group">
		<form action="../Controller/controller.edit.php" method="GET">
			Nome <input name="nome" class="form-control" value="<?php echo $pessoa->nome;?>" type="text"/><br/>
			E-mail <input name="email" class="form-control" value="<?php echo $pessoa->email;?>" type="mail"/><br/>
			Celular <input name="celular" class="form-control" value="<?php echo $pessoa->celular;?>" type="text"/><br/>
			Data de Nascimento <input name="nasc" class="form-control" value="<?php echo $pessoa->nasc;?>" type="date"/><br/>
			<input name="idpessoa" type="hidden" value="<?php echo $pessoa->idpessoa;?>">
			<input type="submit" class="btn btn-primary" value="Salvar alterações"/>
		</form>
		</div>
		<br/>
		<a href="../index.php">Ver todos<br/></a>
		<a href="view.add.php">Cadastrar novo<br/></a>
		</div>
		
	</body>
</html>