<?php

if ($_POST['file_upload'] == 'yes') {
   Loader::library('file/importer');
   $importer = new FileImporter();

   $file = $_FILES['example_file'];

   $name = $file['name'];
   $path = $file['tmp_name'];

   $newFile = $importer->import($path, $name);

   if (is_numeric($newFile)) {
      die(FileImporter::getErrorMessage($newFile));  
   }
}