<?php


interface Veiculo {

	public function acelerar($velocidade);

	public function frenar($velocidade);

	public function trocarMarcha($marcho);

}

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade)
	{

		echo "O veículo acelerou até" . $velocidade . "Km/h";

	}

	public function frenar($velocidade)
	{

		echo "O veículo frenou até" . $velocidade . "Km/h";

	}

	public function trocarMarcha($marcha)
	{

		echo "O veículo engatou a marcha" . $marcha;

	}
}

class DelRey extends Automovel {

	public function empurrar(){



	}
}

$carro = new DelRey(); // Não seria permitido intânciar diretamente a class Automóvel (nesse caso escrever Automóvel no lugar de DelRey) tem que criar uma class Automóvel. 

$carro->acelerar(200);
?>