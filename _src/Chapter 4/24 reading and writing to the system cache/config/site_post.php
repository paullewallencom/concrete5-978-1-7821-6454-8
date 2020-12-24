<?php
$db = Loader::db();
$customers = $db->getAll('SELECT * FROM Customers');

Cache::set('customerList', false, $customers);
$cachedCustomers = Cache::get('customerList', false);