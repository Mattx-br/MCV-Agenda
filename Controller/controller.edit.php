<?php
	include "..\model\connection.php";
	include "..\model\pessoa.factory.php";
	$idpessoa = $_GET['idpessoa'];
	
	$pessoa = new pessoa();
	
	if($pessoa->edit($_GET['idpessoa'], $_GET['nome'], $_GET['email'], $_GET['celular'], $_GET['nasc'])){
		$retorno="Alteração efetuada com sucesso";
	} else {
		$retorno="Erro na alteração";
	}
?>

<html>
	<head>
		<title>Editar</title>
	</head>
	<body>
		<h1>Agenda da turma</h1>
		<h2>Editar:</h2>
		<?php
			echo $retorno;
		?>
		<br/>
		<a href="../View/view.add.php">Cadastrar novo<br/></a>
		<a href="../index.php">Ver todos</a>
	</body>
</html>