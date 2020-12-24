<?php
$path = '/about';
$page = Page::getByCollectionPath($path);
$permissions = new Permissions($page);
$canRead = $permissions->canRead();

var_dump($canRead);
exit;