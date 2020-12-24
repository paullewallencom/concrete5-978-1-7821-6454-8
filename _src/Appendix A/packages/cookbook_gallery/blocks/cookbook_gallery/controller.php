<?php defined('C5_EXECUTE') or die(_("Access Denied."));

class CookbookGalleryBlockController extends BlockController {

   protected $btTable = "btCookbookGallery";
   protected $btInterfaceWidth = "350";
   protected $btInterfaceHeight = "300";
   
   var $defaultCount = 20;

   public function getBlockTypeName() {
      return t('Photo Gallery');
   }

   public function getBlockTypeDescription() {
      return t('Shows photos from a file set.');
   }
   
   public function add() {
      $this->addEdit();
   }
   
   public function edit() {
      $this->addEdit();
   }
   
   public function addEdit() {
      $fsList = new FileSetList();
      $sets = $fsList->get();
      
      $options = array();
      
      foreach ($sets as $fs) {
         $options[$fs->fsID] = $fs->fsName;
      }
      
      $this->set('sets', $options);
   }
   
   public function view() {
      if ($this->file_set) {
         $list = new FileList();
         $set = FileSet::getByID($this->file_set);
         
         $list->filterBySet($set);
         $list->filterByType(FileType::T_IMAGE);
         
         $count = ($this->count) ? $this->count : $this->defaultCount;
         
         $this->set('images', $list->get($count));
      }
      else {
         $this->set('images', false);
      }
   }

}
