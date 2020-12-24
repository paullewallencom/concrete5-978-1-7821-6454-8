<?php defined('C5_EXECUTE') or die(_("Access Denied."));
    
class CookbookEventsBlockController extends BlockController {
    
    protected $btTable = "btCookbookEvents";
    protected $btInterfaceWidth = "350";
    protected $btInterfaceHeight = "300";

    public function getBlockTypeName() {
        return t('Events List');
    }

    public function getBlockTypeDescription() {
        return t('A list of events!');
    }
    
    public function view() {
        Loader::model('cookbook_event', 'cookbook_events');
        $e = new CookbookEvent();
        $events = $e->find('1=1 ORDER BY event_date');
        $this->set('events', $events);
    }
    
}
