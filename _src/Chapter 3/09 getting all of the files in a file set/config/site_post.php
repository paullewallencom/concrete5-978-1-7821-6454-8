<?php
function my_debug($var) {
   echo '<pre>';
   print_r($var);
   echo '</pre>';
   exit;
}

Loader::model('file_list');
$list = new FileList();

$fileSetId = 1;
$fileSet = FileSet::getByID($fileSetId);

$list->filterBySet($fileSet);

$files = $list->get();

foreach ($files as $file) {
   echo $file->getRelativePath().'<br />';
}

exit;