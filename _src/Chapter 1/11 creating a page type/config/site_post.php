<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$handle = 'page_type_handle';
$data = array(
	'ctHandle' => $handle,
	'ctName' => 'Page Type Name'
);

// check if the page type exists
$pageType = CollectionType::getByHandle($handle);

if (!$pageType) {
	// page type does not exist
	$newPageType = CollectionType::add($data);
}
else {
	// page type exists
	$newPageType = $pageType;
}

my_debug($newPageType);