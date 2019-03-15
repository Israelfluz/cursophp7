<?php

//include "exemplo-01.php"; // include tenta fazer com que o arquivo funcione, se não tiver o arquivo ele vai no diretório raiz para saber se tem o arq.

require_once "exemplo-01.php"; // require obriga que o arquivo exista e que o arquivo esteveja funcionando corretamente, se não exister vai dar um erro fatal.
require_once "exemplo-01.php";

$resultado = somar(10, 35);

echo $resultado;

?>