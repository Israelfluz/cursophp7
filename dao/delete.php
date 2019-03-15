<?php

require_once("config.php");

$usuario = new Usuario();
$usuario->delete($_GET['id']);


?>