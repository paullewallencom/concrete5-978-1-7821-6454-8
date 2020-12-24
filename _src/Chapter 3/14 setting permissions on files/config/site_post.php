<?php

$fileId = 1;
$file = File::getByID($fileId);

$userId = 1;
$user = UserInfo::getByID($userId);

$file->setPermissions($user, FilePermissions::PTYPE_MINE);