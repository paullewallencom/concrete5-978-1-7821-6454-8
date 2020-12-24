<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$page = Page::getByID(4);
$path = $page->getCollectionPath();

my_debug($path);