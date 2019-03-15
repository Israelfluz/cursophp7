<?php

$nome1 = "Israel";

$sobrenome = "Luz";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

unset($nome1);

if (isset($nome1)){

	echo $nome1;
}

?>