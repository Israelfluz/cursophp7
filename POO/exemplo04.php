<?php
/* Método mágico */

class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;


	public function __construct($a, $b, $c){ /* Os __ são o método mágico, mas eles devem ser
											 seguidos pelo construct ou qualqer outra função */

		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){ /* Os __ são o método mágico, mas eles devem ser seguidos pelo 
								  destruct ou qualqer outra função. Destructi serve para matar uma variável ou sair de um banco de dados */

		var_dump("DESTRUIR");
	}

	public function __toString(){ /* Os __ são o método mágico, mas eles devem ser seguidos pelo 
								  toString ou qualqer outra função. toString serve para converter um objeto em variável  */

		return $this->logradouro.", ".$this->cidade;
	}
}


$meuEndereco = new Endereco("Qn 28 Conj 2", "14", "Brasília");

var_dump($meuEndereco);

unset($meuEndereco);

// echo ($meuEndereco); Este é para ser usado com o __toString

?>