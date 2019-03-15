<?php

session_id('11723f80f6a3cf1596131687b577f1b3'); /* session_id — Obtém e/ou define o id de sessão atual    */

require_once("config.php"); /* A declaração include_once inclui e avalia o arquivo informado durante a execução do script. */

session_regenerate_id(); /*  session_regenerate_id — Atualiza o id da sessão atual com um novo id gerado     */

echo session_id();

var_dump($_SESSION);

?>