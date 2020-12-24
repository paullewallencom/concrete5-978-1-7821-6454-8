<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class DashboardCookbookEventsController extends Controller {
    
    public function on_start() {
        $this->redirect('/dashboard/cookbook_events/list');
    }
    
}