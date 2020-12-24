<?php $form = Loader::helper('form'); ?>
<form action="<?php echo $this->action('save') ?>">
   <label>
      Your name
      <?php echo $form->text('name'); ?>
   </label>

   <label>
      Email
      <?php echo $form->email('email'); ?>
   </label>

   <?php
      $options = array(
         'general' => 'General Feedback',
         'support' => 'Technical Support',
         'return' => 'Returns / Refunds'
      );
      echo $form->select('reason_for_contacting', $options);
   ?>

   <?php echo $form->textarea('message'); ?>
   
   <input type="submit" value="Submit">
</form>