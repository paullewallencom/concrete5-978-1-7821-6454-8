<?php
function my_debug($var) {
   echo '<pre>';
   print_r($var);
   echo '</pre>';
   exit;
}

$date = Loader::helper('date');

$userTime = $date->getLocalDateTime();
$systemTime = $date->getSystemDateTime();
$timezones = $date->getTimezones();

echo 'User time: ' . $userTime . '<br />';
echo 'System time: ' . $systemTime . '<br />';

my_debug($timezones);