<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$pageType = CollectionType::getByHandle('right_sidebar');

$data = array(
	'cName' => 'About Us',
	'cHandle' => 'about'
);

$parent = Page::getByID(1);
$newPage = $parent->add($pageType, $data);

echo 'done!';
exit;