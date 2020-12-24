<?php
$fh = Loader::helper('file');

$filename = 'Make This Eligible!';
$cleanName = $fh->sanitize($filename);
echo $cleanName; // outputs ‘make_this_eligible’

$ext = $fh->getExtension('image.png');
echo $ext; // outputs ‘png’


$newFilename = $fh->replaceExtension('image.png', 'jpeg');
echo $newFilename; // outputs ‘image.jpeg’ 

$contents = $fh->getContents('data.txt');

$fh->forceDownload('/path/to/file.zip');

$fh->copyAll('/source', '/target');

$fh->removeAll('/directory/to/delete');