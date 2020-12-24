<?php
defined('C5_EXECUTE') or die("Access Denied.");

class Book extends Model {
	public $_table = 'Books';

	public function getTitle() {
		return $this->title;
	}
}