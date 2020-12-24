<?php 
   $form = Loader::helper('form');
   Loader::element('editor_init');
   Loader::element('editor_config');
?>
<form action="<?php echo $this->action('save') ?>">
   <label>
      Your name
      <?php echo $form->text('name'); ?>
   </label>

   <label>
      Email
      <?php echo $form->text('email'); ?>
   </label>

   <?php
      $options = array(
         'general' => 'General Feedback',
         'support' => 'Technical Support',
         'return' => 'Returns / Refunds'
      );
      echo $form->select('reason_for_contacting', $options);
   ?>

   <?php
      Loader::element('editor_controls');
      echo $form->textarea('content', '', array('style' => 'width:100%;', 'class' => 'ccm-advanced-editor'));
   ?>
   
   <input type="submit" value="Submit">
</form>