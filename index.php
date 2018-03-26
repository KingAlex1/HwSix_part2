<?php


header('Content-type: image/jpeg');
$filename = 'gufi.jpg';
$source = imagecreatefromjpeg($filename);
imagejpeg($rotate);
list($width, $height) = getimagesize($filename);
$newWidth = 200;
$newHeight = $newWidth*$height/$width;
$thumb = imagecreatetruecolor($newWidth, $newHeight);
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
$rotate = imagerotate($thumb, 45, 0);
imagejpeg($rotate);


