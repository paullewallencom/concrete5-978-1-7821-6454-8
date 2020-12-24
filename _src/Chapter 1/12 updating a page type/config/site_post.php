<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$handle = 'page_type_handle';
$newHandle = 'new_handle';

$data = array(
	'ctHandle' => $newHandle,
	'ctName' => 'New Name'
);

// load the page type
$pageType = CollectionType::getByHandle($handle);

if ($pageType) {
	$pageType->update($data);
}