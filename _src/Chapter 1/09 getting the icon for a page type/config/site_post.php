<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$pageType = CollectionType::getByHandle('right_sidebar');
$icon = $pageType->getCollectionTypeIconImage();
echo $icon;
exit;