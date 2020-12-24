<?php
Events::extend('on_user_add', 'UserEmailer', 'newAccountCreated', 'libraries/user_emailer.php');