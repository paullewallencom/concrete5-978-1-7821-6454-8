<?php 
$uh = Loader::helper('url');

$params = array(
   'page' => '1',
   'filter' => 'events'
);

$url = $uh->buildQuery('http://example.com', $params);

echo $url; // outputs http://example.com?page=1&filter=events
exit;