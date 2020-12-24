<?php 
defined('C5_EXECUTE') or die(_("Access Denied.")); 
$form = Loader::helper('form');
?>

<div class="ccm-ui">
   <table class="table table-striped table-bordered">
      <tr>
         <td>
            <?php echo t('Maximum events to show') ?>
         </td>
         <td>
            <?php echo $form->text('item_limit', $item_limit) ?>
         </td>
      </tr>
   </table>
</div>