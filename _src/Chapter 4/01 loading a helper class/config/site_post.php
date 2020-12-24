<?php
function my_debug($var) {
   echo '<pre>';
   print_r($var);
   echo '</pre>';
   exit;
}

$handle = 'form';
$formHelper = Loader::helper($handle);

my_debug($formHelper);