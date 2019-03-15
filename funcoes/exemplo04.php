<?php

function ola(){

	$argumentos = func_get_args();  /* func_get_args — Retorna um array contendo uma lista de argumentos da função */
									/* Obtém um array de argumentos da função. Retorna um array onde cada elemento é uma cópia do membro correspondente da lista de argumentos da atual função definida pelo usuário. */

	return $argumentos;



}

var_dump(ola("bom dia", 20));

?>