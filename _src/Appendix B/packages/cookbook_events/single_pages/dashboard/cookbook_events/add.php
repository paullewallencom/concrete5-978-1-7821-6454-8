<?php 
   defined('C5_EXECUTE') or die(_("Access Denied."));
   $form = Loader::helper('form');
   $dth = Loader::helper('form/date_time');
   
   Loader::element('editor_init');
   Loader::element('editor_config');
?>

<div class="ccm-ui">
   
   <?php if (!empty($errors)): ?>
      <div class="alert-message block-message error">
         <strong><?php echo t('There were some problems saving the event.') ?></strong>
         <ul style="margin-top: 5px;">
            <?php foreach ($errors as $e): ?>
               <li><?php echo $e ?></li>
            <?php endforeach ?>
         </ul>
      </div>
   <?php endif; ?>
   
   <div class="ccm-pane">
      <?php
         $dashboard = Loader::helper('concrete/dashboard');
         echo $dashboard->getDashboardPaneHeader(t('Add Event'));
      ?>
      <form action=<?php echo $this->action('save') ?> method="POST">
         <div class="ccm-pane-body">
            <table class="table table-striped table-bordered">
               <tr>
                  <td class="form-label">
                     <?php echo t('Event Title') ?>
                     <span class="req">*</span>
                  </td>
                  <td>
                     <?php echo $form->text('title', $data['title']) ?>
                  </td>
               </tr>
               <tr>
                  <td class="form-label">
                     <?php echo t('Event Date') ?>
                     <span class="req">*</span>
                  </td>
                  <td>
                     <?php echo $dth->datetime('event_date', $data['event_date']) ?>
                  </td>
               </tr>
               <tr>
                  <td class="form-label">
                     <?php echo t('Location') ?>
                  </td>
                  <td>
                     <?php echo $form->text('location', $data['location']) ?>
                  </td>
               </tr>
               <tr>
                  <td class="form-label">
                     <?php echo t('Description') ?>
                  </td>
                  <td>
                     <?php
                        Loader::element('editor_controls');
                        echo $form->textarea('description', $data['description'], array('style' => 'width:100%;', 'class' => 'ccm-advanced-editor'));
                     ?>
                  </td>
               </tr>
            </table>
         </div>
         <div class="ccm-pane-footer">
            <div class="pull-right">
               <input type="submit" class="btn primary" value="<?php echo t('Save Event') ?>">
               <a href="<?php echo $this->url('/dashboard/cookbook_events/list') ?>" class="btn"><?php echo t('Cancel') ?></a>
            </div>
         </div>
         <?php if (!empty($data)): ?>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
         <?php endif; ?>
      </form>
   </div>
</div>