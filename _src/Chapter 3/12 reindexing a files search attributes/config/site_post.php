<?php
function my_debug($var) {
   echo '<pre>';
   print_r($var);
   echo '</pre>';
   exit;
}

$fileId = 1;
$file = File::getByID($fileId);
$file->reindex();