<?php
$dir = getenv('DIRECTORY');
if($dir == null) {
  $dir = '.';
}

$file = $dir .DIRECTORY_SEPARATOR.$_REQUEST['id'];

header('Content-Type: image/jpeg');
readfile($file) or die('Image file not found');
