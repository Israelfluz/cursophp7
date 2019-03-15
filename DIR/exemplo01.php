<?php 
/* Lendo e manipulando pastas/diretórios com PHP 7 */

$name = "imagens";

if (!is_dir($name)) {

	mkdir($name); /* mkdir — Cria um diretório */

	echo "Diretório $name criado com sucesso";

}else {

	rmdir($name);
	echo "Já existe o diretório: $name foi removido";
}



 ?>