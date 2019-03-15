 <?php

function soma(int ...$valores):float {

	return array_sum($valores); /* array_sum — Calcula a soma dos elementos de um array, retorna a soma dos valores de um array e retorna a soma de valores como um inteiro ou ** quando é declarado float(como é nesse exemplo). */

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 33);
echo "<br>";
echo soma(1.5, 3.2); /* Quando declarado como se pode ver lá emcima os valores em float não são ignorados são somados trazendo o seu resultado nest caso o resultado será 4.7 */
echo "<br>";

?>