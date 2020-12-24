<?php
$val = Loader::helper('validation/form');

$data = array(
   'name' => 'Jane Doe',
   'email' => '',
   'website' => 'http://example.com',
   'content' => 'Great post!'
);

$val->setData($data);

$val->addRequired('name', 'Please enter a name.');
$val->addRequiredEmail('email', 'Please enter an email address.');
$val->addRequired('content', 'Please enter some content.');

$passed = $val->test();

if ($passed === false) {
   foreach ($val->getError()->getList() as $error) {
      echo $error . '<br />';
   }
}

exit;