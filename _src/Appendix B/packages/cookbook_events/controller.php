<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class CookbookEventsPackage extends Package {
    protected $pkgHandle = 'cookbook_events';
    
    protected $appVersionRequired = '5.6.0.0';
    protected $pkgVersion = '0.9.0';
    
    public function getPackageName() {
        return t('Cookbook Events');
    }
    
    public function getPackageDescription() {
        return t('A calendar of events for our website.');
    }
    
	public function install() {
	    $pkg = parent::install();
	    
	    // Add the dashboard pages
	    $mainPage = SinglePage::add('/dashboard/cookbook_events', $pkg);
	    $listPage = SinglePage::add('/dashboard/cookbook_events/list', $pkg);
	    $addPage = SinglePage::add('/dashboard/cookbook_events/add', $pkg);
	    
	    // install the block type
	    BlockType::installBlockTypeFromPackage('cookbook_events', $pkg); 
	}
    
}