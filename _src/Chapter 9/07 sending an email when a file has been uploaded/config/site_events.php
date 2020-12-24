<?php
Events::extend('on_file_add', 'FileEmailer', 'fileUploaded', 'libraries/file_emailer.php');