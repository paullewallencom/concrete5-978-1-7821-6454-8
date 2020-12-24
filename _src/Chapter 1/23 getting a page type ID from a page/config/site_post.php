<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$page = Page::getByPath('/about');
$pageTypeId = $page->getCollectionTypeID();

my_debug($pageTypeId);