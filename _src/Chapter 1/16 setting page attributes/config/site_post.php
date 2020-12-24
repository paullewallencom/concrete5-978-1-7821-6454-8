<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$page = Page::getByPath('/about');
$page->setAttribute('meta_title', 'New Page Meta Title');

echo 'done!';
exit;