<?php

function ola($texto = "mundo", $periodo = "Bom dia"){

	return "Olá $texto! $periodo! <br>";

}

echo ola();
echo ola("", "Boa noite");
echo ola("Israel", "Boa tarde");
echo ola("tenha um bom dia", "");


?>