<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$page = Page::getByPath('/about');
$name = $page->getCollectionName();

my_debug($name);