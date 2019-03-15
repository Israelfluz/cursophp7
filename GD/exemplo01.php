<?php 

header("Content-Type: image/png");

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 225, 0, 0);

imagestring($image, 5, 60, 120,"cursophp7", $red);

imagepng($image);

imagedestroy($image);

 ?>