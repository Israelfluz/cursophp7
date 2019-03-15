<?php

require_once("config.php");

use Cliente\Cadastro;


$cad = new Cadastro();

$cad->setNome("IsraelFaria");
$cad->setEmail("israelfaria.gtr@gmail.com");
$cad->setSenha("123456"); 

$cad->registrarVenda();

?>