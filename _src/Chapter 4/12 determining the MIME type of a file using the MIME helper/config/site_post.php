<?php 
$mime = Loader::helper('mime');
$jsMime = $mime->mimeFromExtension('js');
echo $jsMime; // outputs ‘application/x-javascript’
exit;