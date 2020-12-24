<?php
Loader::model('book');
$book = new Book();
$book->load('id = ?', '1');
$title = $book->getTitle();

echo $title;
exit;