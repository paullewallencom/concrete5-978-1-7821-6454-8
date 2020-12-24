<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$page = Page::getByPath('/delete-me');
$page->delete();

echo 'done';
exit;