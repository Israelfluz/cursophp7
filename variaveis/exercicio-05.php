<?php

$nome = "Israel";

function teste(){

	global $nome; 
	echo $nome;

}

function teste2(){

	$nome = "Faria";

	echo $nome . " " . "agora no teste2" ;

}

teste();

teste2();
?>