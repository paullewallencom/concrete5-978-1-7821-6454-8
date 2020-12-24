<?php
$user = new User();
$groupId = 3; // administrators
$group = Group::getByID($groupId);
$isAdmin = $user->inGroup($group);
if ($isAdmin) {
	echo 'You\'re an administrator!';
}
else {
	echo 'You are not an administrator.';
}