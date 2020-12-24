<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<div class="ccm-ui">
   
   <?php if (isset($_GET['success'])): ?>
      <div class="alert-message">
         <?php echo t('The event was saved successfully!') ?>
      </div>
   <?php endif; ?>
   
   <?php if (isset($_GET['deleted'])): ?>
      <div class="alert-message">
         <?php echo t('The event was deleted successfully!') ?>
      </div>
   <?php endif; ?>
   
   <div class="ccm-pane">
      <?php
         $dashboard = Loader::helper('concrete/dashboard');
         echo $dashboard->getDashboardPaneHeader(t('Events'));
      ?>
      <div class="ccm-pane-body">
         <?php if (!empty($events)): ?>
            <table class="table table-striped table-bordered">
               <tr>
                  <th><?php echo t('Event ID') ?></th>
                  <th><?php echo t('Date') ?></th>
                  <th><?php echo t('Title') ?></th>
                  <th><?php echo t('Location') ?></th>
                  <th><?php echo t('Actions') ?></th>
               </tr>
               <?php foreach ($events as $event): ?>
                  <tr class="event-row">
                     <td><?php echo $event->id ?></td>
                     <td><?php echo $event->getDate() ?></td>
                     <td><?php echo $event->title ?></td>
                     <td><?php echo $event->location ?></td>
                     <td>
                        <a href="<?php echo $this->url('/dashboard/cookbook_events/add/edit/', $event->id) ?>" class="btn"><?php echo t('Edit') ?></a>
                        <a href="<?php echo $this->action('delete', $event->id) ?>" class="btn danger delete"><?php echo t('Delete') ?></a>
                     </td>
                  </tr>
               <?php endforeach; ?>
            </table>
         <?php else: ?>
            <p>
               <?php echo t('There are no events! Add one now.'); ?>
            </p>
         <?php endif; ?>
      </div>
      <div class="ccm-pane-footer"></div>
   </div>
</div>