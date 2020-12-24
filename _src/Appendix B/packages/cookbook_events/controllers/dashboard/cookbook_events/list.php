<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class DashboardCookbookEventsListController extends Controller {
    
	public function on_before_render() {
	    $html = Loader::helper('html');
	    $this->addHeaderItem($html->javascript('list.js', 'cookbook_events'));
	}
	
	public function view() {
	    Loader::model('cookbook_event', 'cookbook_events');
	    $event = new CookbookEvent();
	    $events = $event->find('1=1 ORDER BY event_date');
	    $this->set('events', $events);
	}
	
	public function delete($id = null) {
	    if ($id) {
	        Loader::model('cookbook_event', 'cookbook_events');
	        $event = new CookbookEvent();
	        $event->load('id = ?', $id);
	        $event->delete();
	        $this->redirect('/dashboard/cookbook_events/list?deleted');
	    }
	}
    
}