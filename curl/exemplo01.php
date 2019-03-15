<?php 

$cep = "72000000";

$link = "https://viacep.com.br/ws/71880662/json/unicode/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($ch);

curl_close($ch);


$data = json_decode($response, true);

print_r($data["logradouro"]);


 ?>