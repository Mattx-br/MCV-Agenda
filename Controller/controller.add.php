<?php
	include "..\model\connection.php";
	include "..\model\pessoa.factory.php";
	
	$pessoa = new pessoa();
	if($pessoa->add( $_GET['nome'], $_GET['email'], $_GET['celular'], $_GET['dt_nascimento'])){
		$retorno="Cadastro efetuado com sucesso";
	} else {
		$retorno="Erro de cadastro";
	}
?>

<html>
	<head>
		<title>Cadastro</title>
	</head>
	<body>
		<h1>Agenda da turma</h1>
		<h2>Cadastro:</h2>
		<?php
			echo $retorno;	
		?>
		<br/>
		<a href="../View/view.add.php">Cadastrar novo<br/></a>
		<a href="../index.php">Ver todos</a>
	</body>
</html>