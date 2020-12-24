<?php
$user = new User();
$userInfo = UserInfo::getByID($user->getUserID());
$age = $userInfo->getAttribute('age');

// there's more
$age = $userInfo->getAge();