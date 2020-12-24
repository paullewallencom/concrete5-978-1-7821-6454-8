<?php
$path = '/about';
$page = Page::getByCollectionPath($path);
$permissions = new Permissions($page);
$canEdit = $permissions->canWrite();

var_dump($canEdit);
exit;