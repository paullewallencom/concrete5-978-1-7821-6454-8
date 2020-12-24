<?php 
class FileEmailer {

   public function fileUploaded($file, $fv) {
      $mail = Loader::helper('mail');
      
      $mail->setSubject('A file has been added to the file manager');
      $mail->setBody('A new file has been uploaded. Download it here: '.$fv->getDownloadURL());
      $mail->to('somebody@example.com');
      $mail->from('noreply@example.com');
      $mail->sendMail();
   }

}