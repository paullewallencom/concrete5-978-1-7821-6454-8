<?php
function my_debug($var) {
   echo '<pre>';
   print_r($var);
   echo '</pre>';
   exit;
}

$fileId = 1;
$file = File::getByID($fileId);
$newFile = $file->duplicate();

my_debug($newFile);