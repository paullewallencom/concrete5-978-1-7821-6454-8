<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<h1 class="events-title"><?php echo t('Events Calendar') ?></h1>
<div class="events-list">
   <?php if (!empty($events)): ?>
      <?php foreach ($events as $event): ?>
         <div class="event-item">
            <h2><?php echo $event->title ?></h2>
            <div class="event-date">
               <?php echo $event->getDate() ?>
               <?php if ($event->location): ?>
                  @ <?php echo $event->location ?>
               <?php endif; ?>
            </div>
            <?php if ($event->description): ?>
               <div class="event-description">
                  <?php echo $event->description ?>
               </div>
            <?php endif; ?>
         </div>
      <?php endforeach; ?>
   <?php else: ?>
      <p><?php echo t('There are no events!') ?></p>
   <?php endif; ?>
</div>