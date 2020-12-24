<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$pageType = CollectionType::getByHandle('left_sidebar');
$id = $pageType->getCollectionTypeId();
my_debug($id);