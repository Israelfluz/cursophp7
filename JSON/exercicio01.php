<?php

$pessoas = array();

array_push($pessoas, array('nome' => 'Israel', 'idade' =>37));

array_push($pessoas, array('nome' => 'Luz', 'idade' =>37));

echo json_encode($pessoas);

?>