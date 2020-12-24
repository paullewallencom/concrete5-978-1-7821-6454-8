<?php
$userId = 3;
$user = UserInfo::getByID($userId);
$user->delete();