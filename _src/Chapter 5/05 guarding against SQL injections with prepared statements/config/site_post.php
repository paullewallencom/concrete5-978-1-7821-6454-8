<?php

$db = Loader::db();
$query = 'SELECT * FROM Users WHERE uName = ?';
$username = 'admin';

$results = $db->getAll($query, array($username));

foreach ($results as $user) {
   echo $user['uEmail'] . '<br />';
}

exit;

/* 
   There's more...
   $sql = 'INSERT INTO CustomTable (name, country) VALUES (?, ?)';
   $values = array('John Doe', 'US');
   $db->execute($sql, $values);
*/