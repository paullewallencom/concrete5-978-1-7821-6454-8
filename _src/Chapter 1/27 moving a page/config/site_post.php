<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$newParent = Page::getByPath('/about');
$careersPage = Page::getByPath('/careers');

$careersPage->move($newParent, true);