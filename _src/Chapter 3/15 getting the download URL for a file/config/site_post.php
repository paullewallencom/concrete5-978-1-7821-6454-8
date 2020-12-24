<?php

$fileId = 1;
$file = File::getByID($fileId);

$url = $file->getDownloadURL();

echo $url;
exit;