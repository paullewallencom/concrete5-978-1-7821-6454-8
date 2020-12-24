<?php 
$text = Loader::helper('text');

$str = 'This is a test';

$camelCased = $text->camelcase($str);
echo $camelCased; // outputs “ThisIsATest”

$uncamelcased = $text->uncamelcase($camelCased);
echo $uncamelcased; // outputs ‘this_is_a_test’

$url = $text->urlify($str);
echo $url; // outputs ‘this-is-a-test’

$handle = $text->handle($str);
echo $handle; // outpus ‘this_is_a_test’

$alphaNum = $text->alphanum($str);
echo $alphaNum; // outputs ‘This is a test’

$trunc = $text->shortText($str, 4, '...');
echo $trunc; // outputs ‘This...’
exit;