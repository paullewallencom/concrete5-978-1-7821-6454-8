<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$page = Page::getByID(4);
$handle = $page->getCollectionHandle();

my_debug($handle);