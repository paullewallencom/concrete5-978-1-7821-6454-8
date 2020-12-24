<?php 
$nav = Loader::helper('navigation');
$page = Page::getByPath('/about-us');
$url = $nav->getCollectionURL($page);
$breadcrumbs = $nav->getTrailToCollection($page);