<?php

	function view(){		
		$con = $GLOBALS["con"];
		$sql = "select * from pessoa";
		$query = $con->query($sql);
		/*A função fetch_array() / mysqli_fetch_array() busca uma linha de resultado como uma matriz associativa, uma matriz numérica ou ambos.*/
		while($sql = $query->fetch_array()){
			$idpessoa = $sql["idpessoa"];
			$nome = $sql["nome"];
			$email = $sql["email"];				
			$celular = $sql["celular"];
			$nasc = $sql["dt_nascimento"];
			echo "<tr>
			<td>$idpessoa</td>
			<td>$nome</td> 
			<td>$email</td>
			<td>$celular</td>
			<td>$nasc</td>
			<td>
				<a href='View/view.edit.php?idpessoa=".$idpessoa."'>[editar]</a>
				<a href='Controller/controller.del.php?idpessoa=".$idpessoa."'>[excluir]</a>
			</td>					
			</tr>";
		}
		echo '<p>Registros encontrados: '.$query->num_rows.'</p><br/>';
	}

	class pessoa{
		public $idpessoa;
		public $nome;
		public $email;
		public $celular;
		public $nasc;
		
		function __construct(){
			$this->con = $GLOBALS["con"];
		}
			
		function edit_bd($idpessoa){			
			//Selecionar o usuario
			$sql = "select * from pessoa where idpessoa=".$idpessoa;
			
			//Executo o sql
			$query = $this->con->query($sql);
			
			//Retorna dados do objeto
			/*A função fetch_object() / mysqli_fetch_object() retorna a linha atual de um conjunto de resultados, como um objeto.*/
			$res = $query->fetch_object();
			
			//Variaveis recebendo conteudo do banco de dados
			$this->idpessoa=$res->idpessoa;
			$this->nome    = $res->nome;
			$this->email   = $res->email;
			$this->celular = $res->celular;
			$this->nasc    = $res->dt_nascimento;
		}
		
		//deletar pessoa
		function delete($idpessoa){
			$sql = "DELETE FROM pessoa where idpessoa='$idpessoa'";
			
			return $this->con->query($sql);
		}
		//editar pessoa
		function edit($idpessoa,$nome, $email, $celular, $nasc){		
			$sql = "UPDATE pessoa SET nome='$nome', email='$email', celular='$celular', dt_nascimento='$nasc' where idpessoa='$idpessoa'";
			return $this->con->query($sql);
		}
		//adicionar pessoa
		function add($nome, $email, $celular, $dt_nascimento){
			$sql = "insert into pessoa(idpessoa, nome, email, celular, dt_nascimento) ".
			"values ('', '$nome', '$email', '$celular', '$dt_nascimento')";
			
			return $this->con->query($sql);
		}
	}
	
?>