<?php

if ($_POST['file_upload'] == 'yes') {
   $fileId = $_POST['file_id'];
   echo 'You have chosen file #'.$fileId;
   exit;
}