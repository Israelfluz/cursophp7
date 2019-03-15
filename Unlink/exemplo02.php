<?php 
// Excluindo aquirvos

if (!is_dir("imagens")) mkdir("imagens"); // is_dir — Diz se o caminho é um diretório

foreach (scandir("imagens") as $item) { //  scandir — Lista os arquivos e diretórios que estão no caminho especificado

	if (!
		unlink("imin_array($item, array(",", ".."))){. 
agens/" . $item);
	} // unlink — Apaga um arquivo
}

echo "OK";
 ?>