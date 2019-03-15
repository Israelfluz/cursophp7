<?php

require_once("config.php");

$usuario = new Usuario();
$usuario->loadById($_GET['id']);

echo $usuario->getIdusuario();
echo $usuario->getDessenha();
echo $usuario->getDeslogin();

$usuario->update('user alterado', 'senha alterada');


?>