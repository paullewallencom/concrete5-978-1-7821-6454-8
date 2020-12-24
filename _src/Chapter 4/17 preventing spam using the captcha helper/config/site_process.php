<?php
$captcha = Loader::helper('validation/captcha');

if ($captcha->check()) {
   // User passed, continue processing.
}