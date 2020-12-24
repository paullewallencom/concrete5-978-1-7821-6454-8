<?php
$loggedIn = User::isLoggedIn();
if ($loggedIn) {
	echo '<p>Thanks for logging in!</p>';
}
else {
	echo '<a href="/login">Login</a>';
}