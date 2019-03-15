<?php

$pessoa = array(
	'nome'=> 'Israel',
	'idade' => 20
);

foreach ($pessoa as &$value) { /* & realiza a passagem de valor por referência */
							   /* O foreach funciona somente em arrays e objetos, e emitirá um erro ao tentar usá-lo em uma variável com um tipo de dado diferente ou em uma variável não inicializada. */

	if(gettype($value) === 'integer') $value += 10;
	
	echo $value.'<br>';
}

print_r($pessoa);

?>