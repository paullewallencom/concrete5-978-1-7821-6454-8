<?php

$db = Loader::db();
$query = 'INSERT INTO CustomTable (name, country) VALUES ("John Doe", "US")';
$db->execute($query);

echo 'done!';
exit;

/* 
   There's more...
   $query = 'TRUNCATE CustomTable';
   $db->execute($query);
*/