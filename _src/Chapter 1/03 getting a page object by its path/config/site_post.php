<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$path = '/about-us';
$aboutPage = Page::getByPath($path);
my_debug($aboutPage);