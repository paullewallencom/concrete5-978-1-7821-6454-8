<?php 
class UserEmailer {

	public function newAccountCreated($user) {
		$mail = Loader::helper('mail');

		$mail->setSubject('New account created!');
		$mail->setBody('Someone with the email address of '.$user->uEmail.' has created an account.');
		$mail->to('somebody@example.com');
		$mail->from('noreply@example.com');
		$mail->sendMail();
	}

}