<?php
function my_debug($var) {
   echo '<pre>';
   print_r($var);
   echo '</pre>';
   exit;
}

$rss = Loader::helper('feed');
$url = 'http://www.packtpub.com/rss.xml';
$feed = $rss->load($url);

my_debug($feed);