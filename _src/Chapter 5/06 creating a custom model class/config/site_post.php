<?php

Loader::model('book');
$book = new Book();
$book->createBook('concrete5 Cookbook', 'David Strack');
$title = $book->getTitle();
exit;