<?php 

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$minetype = $fileinfo->file($filename);

$base64_encode = "data:" . $minetype . ";base64," . $base64;

 ?>
 <a href="?=$base64_encode?>" target="_blank">Link Para Imagem</a>

 <img src="<?=$base64_encode?>">