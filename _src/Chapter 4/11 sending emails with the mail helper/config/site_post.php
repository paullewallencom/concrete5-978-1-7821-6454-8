<?php 

$mail = Loader::helper('mail');
$mail->to('test@example.com');
$mail->from('noreply@example.com');
$mail->setSubject('Hello from your concrete5 website!');
$mail->setBody('This email was sent from your webserver!');

$mail->sendMail();

// there's more!
$mail->addParameter('name', 'John Doe');
$mail->load('test');
$mail->sendMail();