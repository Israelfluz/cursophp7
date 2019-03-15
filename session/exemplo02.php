<?php

require_once("config.php");

session_unset($_SESSION['nome']);  /* session_unset — Libera todas as variáveis de sessão   */

echo $_SESSION['nome'];

session_destroy(); /* session_destroy — Destrói todos os dados registrados em uma sessão  */
?>