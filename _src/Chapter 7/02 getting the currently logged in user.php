<?php
$isLoggedIn = User::isLoggedIn();
if ($isLoggedIn) {
	$user = new User();
	echo $user->getUsername();
}