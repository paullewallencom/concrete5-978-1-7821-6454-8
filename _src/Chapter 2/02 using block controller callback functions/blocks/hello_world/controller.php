<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class HelloWorldBlockController extends BlockController {

   protected $btTable = "btHelloWorld";
   protected $btInterfaceWidth = "300";
   protected $btInterfaceHeight = "300";
   
   public function view() {
      $this->set('name', 'John Doe');
   }

   public function getBlockTypeName() {
      return t('Hello World');
   }

   public function getBlockTypeDescription() {
      return t('A basic Hello World block type!');
   }
   
}