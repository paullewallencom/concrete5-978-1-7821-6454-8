<?php
Loader::model('book');
$book = new Book();

$book->title = 'The Wind in the Willows';
$book->author = 'Kenneth Grahame';

$book->save();
exit;