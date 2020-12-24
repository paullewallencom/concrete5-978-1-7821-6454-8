<?php
Loader::model('book');
$book = new Book();
$books = $book->find('1=1');

foreach ($books as $b) {
	echo $b->getTitle().'<br />';
}

exit;

/*
	There's more...
	$books = $book->find('title LIKE "%?%"', 'concrete5');
*/