<?php 

$ih = Loader::helper('image');

$fileId = 1;
$image = File::getByID($fileId);

$thumbnail = $ih->getThumbnail($image, 100, 100, true);

echo $thumbnail->src;
exit;