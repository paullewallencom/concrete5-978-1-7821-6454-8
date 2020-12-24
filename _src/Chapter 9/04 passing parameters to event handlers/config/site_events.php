<?php
Events::extend('on_start', 'MyClass', 'onStartFired', 'libraries/my_class.php', array('This is a custom message!'));