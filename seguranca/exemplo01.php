<?php
//Command injection

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

$ls = escapeshellcmd($_POST["ls"]);

var_dump($ls);

echo "<pre>";

$comando = system($ls, $retorno);

echo "</pre>";


}

?>
<<form method="post" accept-charset="utf-8">
	
	<input type="text" name="ls">
	<input type="submit">Enviar</</button>
</form>