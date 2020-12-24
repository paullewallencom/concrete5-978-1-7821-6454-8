<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

class BasicAddonPackage extends Package {

	protected $pkgHandle = 'basic_addon';
	protected $appVersionRequired = '5.5.0';
	protected $pkgVersion = '1.0.0';

	public function getPackageDescription() {
		return 'This is a super-simple package';
	}

	public function getPackageName() {
		return 'Basic Add-On';
	}
	
	public function install(){
		Loader::model('single_page');
		$pkg = parent::install();
		$page = SinglePage::add('/dashboard/hello', $pkg);
	}

}