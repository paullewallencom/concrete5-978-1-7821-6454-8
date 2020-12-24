<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$pageType = CollectionType::getByID(4);
$handle = $pageType->getCollectionTypeHandle();
my_debug($handle);