<?php 

$html = Loader::helper('html');

echo $html->css('example.css');
echo $html->javascript('example.js');
echo $html->image('icon.png');

exit;