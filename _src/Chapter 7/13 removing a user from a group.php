<?php
$user = new User();
$groupId = 3; // administrators
$group = Group::getByID($groupId);
$inGroup = $user->inGroup($group);

if ($inGroup) {
	$user->exitGroup($group);
}