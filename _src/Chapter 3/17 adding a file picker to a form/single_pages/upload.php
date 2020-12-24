<?php $assetLibrary = Loader::helper('concrete/asset_library'); ?>
<form method="POST" enctype="multipart/form-data">
   <?php echo $assetLibrary->file('file_id', 'file_id', 'Select a file...') ?>
   <input type="hidden" name="file_upload" value="yes">
   <input type="submit" value="Upload the file!">
</form>