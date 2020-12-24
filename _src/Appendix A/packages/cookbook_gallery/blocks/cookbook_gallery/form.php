<?php 
defined('C5_EXECUTE') or die(_("Access Denied.")); 
$form = Loader::helper('form');
?>

<div class="ccm-ui">
   <table class="table table-striped table-bordered">
      <tr>
         <td>
            <?php echo t('File set to show photos from') ?>
         </td>
         <td>
            <?php echo $form->select('file_set', $sets, $file_set) ?>
         </td>
      </tr>
      <tr>
         <td>
            <?php echo t('How many images to show?') ?>
         </td>
         <td>
            <?php echo $form->text('count', $count) ?>
         </td>
      </tr>
   </table>
</div>