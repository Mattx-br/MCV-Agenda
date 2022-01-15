<?php
	include "..\model\connection.php";
	include "..\model\pessoa.factory.php";
	$idpessoa = $_GET['idpessoa'];
	$pessoa = new pessoa();
	if($pessoa->delete($idpessoa)){
		$retorno = "Exclusão efetuada com sucesso";
	}else{
		$retorno = "Erro ao tentar excluir dados";
	}
?>

<html>
	<head>
		<title>Deletar</title>
	</head>
	<body>
		<h1>Agenda da turma</h1>
		<h2>Deletar:</h2>
		<?php			
			echo $retorno;
		?>		
		<br/> 
		<a href="../View/view.add.php">Cadastrar novo<br/></a>
		<a href="../index.php">Ver todos</a>
	</body>
</html>