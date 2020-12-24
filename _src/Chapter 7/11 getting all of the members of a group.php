<?php 
$groupId = 3;
$group = Group::getByID($groupId);
$members = $group->getGroupMembers();
foreach ($members as $member) {
	echo $member->getUserName().'<br />';
}