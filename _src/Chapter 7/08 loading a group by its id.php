<?php
$groupId = 3;
$group = Group::getByID($groupId);

echo $group->gName;
exit;