<?php 

$data = array(
	"empresa"=>"Cyber Tecnology" 
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600); /* 3600 segundos, que 
																equivalem há 1 hora, se quiser por um dia é só multiplicar 3600*24 */
echo "OK";

 ?>