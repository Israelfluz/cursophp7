<?php 

$filename = "usuarios.csv";

if (file_exists($filename)) {

	$file = fopen($filename, "r");

	$headers = explode(",", fgets($file)); 	// fgets — Lê uma linha de um ponteiro de arquivo,  nesse caso, a primeira linha de usuarios.csv
											/* O fgets($file); dessa maneira var_dump aparecerá uma string */
											/* Ao colocar o explode( ",", fgets($file)); o var_dump vai mostrar um array */ 


	$data = array();

	while ($row = fgets($file)) {  /* Ao utilizar o While, o fgets vai ler todas as linhas de um ponteiro */
		
		$rowdata = explode(",", $row);

		$linha = array();

		for ($i = 0; $i < count($headers); $i++){

			$linha[$headers[$i]] = $rowdata[$i];

		}

		array_push($data, $linha);

		//var_dump($row);

	}

	fclose($file);

	json_encode($data);

	//var_dump($headers);
}

 ?>