<?php
defined('C5_EXECUTE') or die("Access Denied.");

class Book extends Model {

	public function createBook($title, $author) {
		$db = Loader::db();

		$this->title = $title;
		$this->author = $author;

		$query = 'INSERT INTO Books (title, author) VALUES (?, ?)';
		$values = array($title, $author);

		$db->execute($query, $values);

		$this->id = mysql_insert_id();

		return $this->id;
	}

	public function loadById($id) {
		$db = Loader::db();
		$query = 'SELECT * FROM Books WHERE id = ?';

		$books = $db->getAll($query, $id);

		$book = $books[0];

		$this->id = $book['id'];
		$this->title = $book['title'];
		$this->author = $book['author'];

	}

	public function getTitle() {
		return $this->title;
	}

}