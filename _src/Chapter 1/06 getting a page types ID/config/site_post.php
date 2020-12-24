<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$pageType = CollectionType::getByHandle('right_sidebar');
$id = $pageType->getCollectionTypeId();
my_debug($id);