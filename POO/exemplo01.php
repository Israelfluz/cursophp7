<?php


class Pessoa { /* A definição de uma classe começa com a palavra chave class, seguida do nome da classe, seguido de um par de colchetes que englobam
 				as definições de propriedades e métodos pertecentes à classe. */
	
	public $nome;       // Atributo

	public function falar(){         //Método

		return "O meu nome é".$this->nome; /* A pseudo-variável $this está disponível quando um método é chamado a partir de um contexto de objeto. 
											$this é uma referência ao objeto chamado (normalmente o objeto ao qual o método pertence, mas possivelmente outro objeto, se o método é chamado estaticamente a partir do contexto de um objeto secundário). */
	}
}

$israel = new Pessoa(); /* Não tem método construtor, não haveria a necessidade de colocar essas (), mas por força do hábito foram colocadas, neste 
						caso o método construtor está vazio. */
$israel->nome = "Israel Luz";
$israel->falar();

echo $israel->falar();

?>