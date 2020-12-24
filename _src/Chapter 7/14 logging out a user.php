<?php
$loggedIn = User::isLoggedIn();
$user = new User();
if ($loggedIn) {
	$user->logout();
}