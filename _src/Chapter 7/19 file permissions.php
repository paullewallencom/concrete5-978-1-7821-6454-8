<?php
$permissions = FilePermissions::getGlobal();
$canUpload = $permissions->canAddFiles();
$canViewFileManager = $permissions->canAccessFileManager();

// there's more
$canUploadMp3 = $permissions->canAddFileType('mp3');