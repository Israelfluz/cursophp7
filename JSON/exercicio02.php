<?php

$json = '[{"nome":"Israel","idade":37},{"nome":"Luz","idade":37}]';

$data = json_decode($json, true);

var_dump($data);


?>