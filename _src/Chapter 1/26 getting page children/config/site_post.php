<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$page = Page::getByID(1);
$children = $page->getCollectionChildrenArray();

foreach ($children as $childId) {
	$child = Page::getByID($childId);
	echo $child->getCollectionName().'<br />';
}

exit;