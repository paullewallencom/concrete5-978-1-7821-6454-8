<?php

class EmailEveryone extends Job {

   public function getJobName() {
      return 'Wakeup Email';
   }

   public function getJobDescription() {
      return 'Give all of your site members a morning wakeup email!';
   }

   public function run() {
      Loader::model('user_list');
      $ul = new UserList();

      $users = $ul->get();

      foreach ($users as $user) {
         $mail = Loader::helper('mail');

         $mail->setSubject('Good morning!');
         $mail->from('noreply@example.com');
         $mail->to($user->getUserEmail());

         $mail->setBody('Good morning, '.$user->getUserName());

         $mail->sendMail();
      }

      return 'Emailed '.count($users).' users.';
   }

}