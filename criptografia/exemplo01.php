<?php

$data = [
	"nome"=>"IsraelfLuz"
];

define('SECRET', pack('a16', 'senha'));

$mcrypt = mcrypt_encrypt(
	MCRYPT_RIJNDAEL_128,
	SECRET, 
	json_encode($data), 
	MCRYPT_MODE_ECB
);

var_dump(base64_encode($mcrypt));

//O código abaixo, é o processo inverso o decrypt

$string = mcrypt_decrypt(
	MCRYPT_RIJNDAEL_128,
	SECRET,
	base64_decode($final), 
	MCRYPT_MODE_ECB
);

var_dump(json_decode($string, true));

?>