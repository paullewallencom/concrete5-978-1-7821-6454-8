<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class CookbookGalleryPackage extends Package {
   protected $pkgHandle = 'cookbook_gallery';

   protected $appVersionRequired = '5.6.0.0';
   protected $pkgVersion = '0.9.0';

   public function getPackageName() {
      return t('Cookbook Gallery');
   }

   public function getPackageDescription() {
      return t('An image gallery that ties into the file manager.');
   }

   public function install() {
      $pkg = parent::install();

      // install the block type
      BlockType::installBlockTypeFromPackage('cookbook_gallery', $pkg); 
   }

}