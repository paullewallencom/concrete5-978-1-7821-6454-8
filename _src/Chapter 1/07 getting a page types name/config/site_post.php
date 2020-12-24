<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$pageType = CollectionType::getByHandle('right_sidebar');
$name = $pageType->getCollectionTypeName();
my_debug($name);