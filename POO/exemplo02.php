<?php
/* Atributos e Métodos */

class Carro{

	private $modelo; /* Privete é um Atributo */
	private $motor;
	private $ano;

	public function getModelo(){  /* get é um Método */

		return $this->modelo;

	}

	public function setModelo($modelo){ /* set é um Método */

		$this->modelo = $modelo;
	}

	public function getMotor():float{

		return $this->motor;
	}

	public function setMotor($motor){

		$this->motor = $motor;
	}

	public function getAno():int{

		return $this->ano;
	}

	public function setAno($ano){

		$this->ano = $ano;
	}

	public function exibir(){

		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno(),

		);
	}
}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2019");

var_dump($gol->exibir());

?>