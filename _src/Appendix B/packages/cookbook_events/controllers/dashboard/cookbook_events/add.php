<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class DashboardCookbookEventsAddController extends Controller {
	
	public function edit($id = null) {
	   if ($id) {
	      // in edit mode, load the event to be edited
	      Loader::model('cookbook_event', 'cookbook_events');
	      $event = new CookbookEvent();
	      $event->load('id = ?', $id);
	      
	      // pass the event object to the view as an array
	      $this->set('data', (array) $event);
	   }
	}
	
	public function save() {
	   $data = $_POST;
	   
	   // verify that all required fields have been filled out
	   $val = Loader::helper('validation/form');
	   $val->setData($data);
	   
	   $val->addRequired('title', t('Please enter a title.'));
	   
	   $passed = $val->test();
	   
	   if (!$passed) {
	      $this->set('errors', $val->getError()->getList());
	   }
	   else {
	      $dth = Loader::helper('form/date_time');
	      Loader::model('cookbook_event', 'cookbook_events');
	      $event = new CookbookEvent();
	      
	      if ($data['id']) {
	         $event->load('id = ?', $data['id']);
	      }
	      
	      $event->title = $data['title'];
	      $event->event_date = $dth->translate('event_date');
	      
	      if ($data['location']) {
	         $event->location = $data['location'];
	      }
	      
	      if ($data['description']) {
	         $event->description = $data['description'];
	      }
	      
	      if (!$data['id']) {
	         $user = new User();
	         $event->created_by = $user->getUserID();
	         $event->created_at = date('Y-m-d H:i:s');
	      }
	      
	      $event->save();
	      
	      $this->redirect('/dashboard/cookbook_events/list?success');
	   }
	}
	
}