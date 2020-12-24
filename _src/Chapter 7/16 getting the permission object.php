<?php
$path = '/about';
$page = Page::getByPath($path);
$permissions = new Permissions($page);
var_dump($permissions);