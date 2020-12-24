<?php

$eh = Loader::helper('encryption');

$encrypted = $eh->encrypt('hello');
echo $encrypted . '<br />';

$decrypted = $eh->decrypt($encrypted);
echo $decrypted;

exit;