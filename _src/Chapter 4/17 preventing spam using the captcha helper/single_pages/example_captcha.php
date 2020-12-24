<?php $captcha = Loader::helper('validation/captcha') ?>

<form>
   <?php echo $captcha->display(); ?> <br />
   <?php echo $captcha->showInput(); ?>
   <input type="submit">
</form>