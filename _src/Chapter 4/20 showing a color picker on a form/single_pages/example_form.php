<?php 
   $color = Loader::helper('form/color');
?>

<form>
   <?php echo $color->output('color', 'Choose a color...') ?>
</form>