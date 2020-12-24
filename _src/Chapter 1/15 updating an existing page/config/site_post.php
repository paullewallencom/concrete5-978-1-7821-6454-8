<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}

$page = Page::getByPath('/about');

$data = array(
	'cName' => 'About Our Company'
);

$page->update($data);

echo 'done!';
exit;