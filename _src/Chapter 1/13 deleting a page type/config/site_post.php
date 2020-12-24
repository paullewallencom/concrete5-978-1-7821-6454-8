<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$handle = 'delete_me';
$pageType = CollectionType::getByHandle($handle);
$pageType->delete();