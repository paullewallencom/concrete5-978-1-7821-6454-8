<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class CookbookEvent extends Model {
    
    var $_table = 'CookbookEvents';
    
    public function getDate() {
        return date(DATE_APP_GENERIC_MDY_FULL, strtotime($this->event_date));
    }
    
}