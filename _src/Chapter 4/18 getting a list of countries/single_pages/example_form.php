<?php 
   $list = Loader::helper('lists/countries');
   $countries = $list->getCountries();
   $form = Loader::helper('form');
?>

<form>
   <?php echo $form->select('country', $countries); ?>
</form>