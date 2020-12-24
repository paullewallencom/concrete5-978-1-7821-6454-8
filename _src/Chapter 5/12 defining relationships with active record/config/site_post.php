<?php
Loader::model('state');
$state = new State();
$state->load('id = ?', '4');
$cities = $state->Cities;

foreach ($cities as $city) {
	echo $city->name .'<br />';
}

exit;