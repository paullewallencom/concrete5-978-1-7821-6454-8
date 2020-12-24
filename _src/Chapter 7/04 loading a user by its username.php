<?php
$username = 'admin';
$user = UserInfo::getByUserName($username);
echo $user->getUserID();