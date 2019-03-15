<?php


$a = 10;

function trocaValor(&$a){ /* Ultiliza-se o & para fazer uma passegam de função por referência */

	$a += 50;

	return $a;
}

echo trocaValor($a);
echo "<br>";
echo $a;

?>