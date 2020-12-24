<?php 
function my_debug($var) {
   echo '<pre>';
   print_r($var);
   echo '</pre>';
   exit;
}

$json = Loader::helper('json');
$data = array(
   'name' => 'John Doe',
   'age' => '31'
);

$jsonStr = $json->encode($data);
$newObject = $json->decode($jsonStr);