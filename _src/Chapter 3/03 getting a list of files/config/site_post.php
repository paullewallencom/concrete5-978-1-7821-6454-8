<?php

Loader::model('file_list');
$list = new FileList();
$list->filterByType(FileType::T_IMAGE);
$images = $list->get();

foreach ($images as $img) {
   echo $img->getRelativePath().'<br />';
}

exit;