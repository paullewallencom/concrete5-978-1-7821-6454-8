<?php 
   $list = Loader::helper('lists/states_provinces');
   $counties = $list->getStateProvinceArray('UK');
   $form = Loader::helper('form');
?>

<form>
   <?php echo $form->select('county', $counties); ?>
</form>