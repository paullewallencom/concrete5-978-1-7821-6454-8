<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

Loader::model('page_list');
$list = new PageList();

$list->filterByPath('/blog');
$list->setItemsPerPage(20);

$pages = $list->getPage();

foreach ($pages as $page) {
	echo $page->getCollectionTitle().'<br />';
}

exit;