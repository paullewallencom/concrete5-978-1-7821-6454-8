<?php
$userId = 1;
$user = User::getByID($userId);
$groupId = 3;
$group = Group::getByID($groupId);
$user->enterGroup($group);