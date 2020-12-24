<?php
function my_debug($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
	exit;
}