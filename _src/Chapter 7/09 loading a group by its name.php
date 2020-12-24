<?php
$groupName = 'Administrators';
$group = Group::getByName($groupName);
var_dump($group);