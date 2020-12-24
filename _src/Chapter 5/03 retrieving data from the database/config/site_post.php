<?php

$db = Loader::db();
$query = 'SELECT * FROM Users';
$results = $db->getAll($query);
foreach ($results as $user) {
   echo $user['uName'].'<br />';
}

exit;

/* 
   There's more...
   $count = $db->getOne('SELECT COUNT(*) FROM Users');
*/