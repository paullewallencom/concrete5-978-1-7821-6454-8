<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$leftSidebarId = 4;
$leftSidebarPageType = CollectionType::getByID($leftSidebarId);
my_debug($leftSidebarPageType);