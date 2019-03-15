<?php

require_once("config.php");

echo session_save_path(); /* session_save_path — Obtém e/ou define o caminho para armazenamento da sessão atual */

echo "<br>";

var_dump(session_status()); /* var_dump — Mostra informações sobre a variável  */

echo "<br>";

 switch (session_status()) {  /* session_status — Retorna o status atual da sessão */
	case PHP_SESSION_DISABLE:
	echo "se as sessões estiverem desabilitadas";
	break;
	
	case PHP_SESSION_NONE:
	echo "se as sessões estiverem habilitadas, mas nenhuma existir";
	break;

	case PHP_SESSION_ACTIVE:
	echo "se as sessões estiverem habilitadas, e uma existir";
	break;
}

?>