<?php 

function error_handler($code, $message, $file, $line){

	echo json_encode(array(

		"code"=>$code,
		"messge"=>$message,
		"line"=>$line,
		"file"=>$file

	));


}

set_error_handler("error_handler");

echo 100 / 0;

 ?>