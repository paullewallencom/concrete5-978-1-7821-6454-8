<?php 
   defined('C5_EXECUTE') or die(_("Access Denied.")); 
   $ih = Loader::helper('image');
?>

<h1><?php echo t('Image Gallery') ?></h1>

<?php if ($images !== false): ?>
   <div class="gallery-wrapper">
      <?php foreach ($images as $image): ?>
         <?php $thumbnail = $ih->getThumbnail($image, 100, 100, true); ?>
         <a class="gallery-image" href="<?php echo $image->getRelativePath() ?>">
            <img src="<?php echo $thumbnail->src ?>" />
         </a>
      <?php endforeach; ?>
   </div>
<?php else: ?>
   <p><?php echo t('There are no images!') ?></p>
<?php endif; ?>