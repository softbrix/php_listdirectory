<?php
$dir = getenv('DIRECTORY');
if($dir == null) {
  $dir = '.';
}
$files = array_slice(scandir($dir), 2);

echo json_encode($files);
