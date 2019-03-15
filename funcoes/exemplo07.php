<?php

function soma(int ...$valores){

	return array_sum($valores); /* array_sum — Calcula a soma dos elementos de um array, retorna a soma dos valores de um array e retorna a soma de valores como um inteiro ou ** quando é declarado float. */

}

echo soma(2, 2);
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2);  /* Quando declarado, os valores em float não são ignorados são somados trazendo o seu resultado. Neste caso, como não foi declarado float ex: function soma(int ...$valores):float {, o resultado será 4, soma-se os interiros */
echo "<br>";

?>