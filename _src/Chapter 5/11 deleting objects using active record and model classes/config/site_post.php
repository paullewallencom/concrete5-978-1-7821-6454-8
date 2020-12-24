<?php
Loader::model('book');
$book = new Book();
$book->load('id = ?', '1');
$book->delete();
exit;