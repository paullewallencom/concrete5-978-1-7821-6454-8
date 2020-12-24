<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$pageType = CollectionType::getByHandle('right_sidebar');
$pages = $pageType->getPages();

foreach ($pages as $page) {
	echo $page->getCollectionTitle().'<br />';
}

exit;