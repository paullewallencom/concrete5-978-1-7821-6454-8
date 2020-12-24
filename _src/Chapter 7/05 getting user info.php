<?php
$user = new User();
$userId = $user->getUserID();
$username = $user->getUserName();
$isRegistered = $user->isRegistered();
$isActive = $user->isActive();
$isSuper = $user->isSuperUser();

$userInfo = UserInfo::getByID($userId);
$email = $userInfo->getUserEmail();
$password = $userInfo->getUserPassword();
$loginCount = $userInfo->getNumLogins();
$verifiedEmail = $userInfo->isValidated();
$previousLogin = $userInfo->getPreviousLogin();
$hasAvatar = $userInfo->hasAvatar();
$dateAdded = $userInfo->getUserDateAdded();