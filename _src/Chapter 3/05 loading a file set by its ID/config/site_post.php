<?php
function my_debug($var) {
   echo '<pre>';
   print_r($var);
   echo '</pre>';
   exit;
}

$id = 1;
$fileSet = FileSet::getByID($id);

my_debug($fileSet);

// There's more:
// $fileSet = FileSet::getByName('File Set Name');