<?php

class Pessoa{

	public $nome = "Israel Luz";
	protected $idade = 37;
	private $senha = "12345";

	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";


	}



}

class Programador extends Pessoa{

	public function verDados(){

		// echo get_class($this) . "<br>"; para ver que class em que foi instanciada o objeto

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";


	}

}

$objeto = new Programador();

//echo $objeto->senha . "<br>";

$objeto->verDados();

?>