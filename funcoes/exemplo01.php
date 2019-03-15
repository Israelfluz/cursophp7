<?php

function ola(){

	return "Olá Israel! <br>";  /* A declaração return retorna o controle do programa para o módulo que o chamou. A execução continuará na expressão seguinte à invocação do módulo.  */


}
echo ola();
$frase = ola();

echo strlen($frase);

?>