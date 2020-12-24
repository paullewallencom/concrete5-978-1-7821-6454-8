<?php
Loader::model('book');
$book = new Book();

$book->load('id = ?', '1');
$book->title = 'New Title';

$book->update();
exit;