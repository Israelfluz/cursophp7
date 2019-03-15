<?php

$pasta = "arquivos";

$permissao = "7777";

if (!is_dir($pasta)) mkdir($pasta, $permissao);

 echo "Diretório criado com sucesso!";

?>