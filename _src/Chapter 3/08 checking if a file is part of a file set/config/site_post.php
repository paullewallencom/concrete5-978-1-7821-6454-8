<?php
function my_debug($var) {
   echo '<pre>';
   print_r($var);
   echo '</pre>';
   exit;
}

$fileId = 1;
$fileSetId = 1;

$file = File::getByID($fileId);
$fileSet = FileSet::getByID($fileSetId);

if ($file->inFileSet($fileSet)) {
   echo 'yes!';
}
else {
   echo 'no';
}

exit;