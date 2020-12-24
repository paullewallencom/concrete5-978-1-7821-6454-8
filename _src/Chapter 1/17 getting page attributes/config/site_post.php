<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$page = Page::getByPath('/about');
$title = $page->getAttribute('meta_title');

my_debug($title);