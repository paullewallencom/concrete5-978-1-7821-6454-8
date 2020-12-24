<?php
defined('C5_EXECUTE') or die("Access Denied.");

class Book extends Model {
	var $_table = 'Books';

	public function getTitle() {
		return $this->title;
	}
}