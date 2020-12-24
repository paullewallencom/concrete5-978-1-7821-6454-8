<?php
$user = new User();
$userInfo = UserInfo::getByUserID($user->getUserID());
$userInfo->setAttribute('age', 35);