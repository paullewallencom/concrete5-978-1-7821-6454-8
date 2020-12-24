<?php 

$db = Loader::db();
$methods = get_class_methods($db);

print_r($methods);
exit;

/* 
   There's more...
   $db = Loader::db('host', 'user', 'password', 'database');
*/