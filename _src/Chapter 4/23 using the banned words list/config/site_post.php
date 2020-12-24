<?php

$bannedWords = Loader::helper('validation/banned_words');
$isBanned = $bannedWords->isBannedWord('friendly');

var_dump($isBanned);
exit;