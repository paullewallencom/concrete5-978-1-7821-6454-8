<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$pageId = 1;
$page = Page::getByCollectionID($pageId);
my_debug($pageId);