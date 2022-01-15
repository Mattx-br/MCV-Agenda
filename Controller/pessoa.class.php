<?php
class pessoa{
	public $idpessoa;
	public $nome;
	public $email;
	public $celular;
	public $nasc;
	
/*PHP - A função __construct
Um construtor permite que você inicialize as propriedades de um objeto após a criação do objeto.
Se você criar uma função, o PHP chamará automaticamente essa função quando você criar um objeto de uma classe.__construct()
Observe que a função de construção começa com dois sublinhados (__)!   */
	function __construct($idpessoa, $nome, $email, $celular, $nasc){
		$this->idpessoa=$idpessoa;
		$this->nome=$nome;
		$this->email=$email;
		$this->celular=$celular;
		$this->nasc=$nasc;
	}
}
?>