<?php 
   $form = Loader::helper('form');
?>
<div>
   <label for="title">Title</label>
   <?php echo $form->text('title', $title); ?>
</div>
<div>
   <label for="content">Content</label>
   <?php echo $form->textarea('content', $content); ?>
</div>