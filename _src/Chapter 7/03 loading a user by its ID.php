<?php
$userId = 1;
$user = User::getByUserID($userId);
echo $user->getUserName();