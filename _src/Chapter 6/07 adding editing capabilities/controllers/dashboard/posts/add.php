<?php 
defined('C5_EXECUTE') or die("Access Denied.");

class DashboardPostsAddController extends Controller {

	public function save() {
		Loader::model('blog_post');
		$post = new BlogPost();
		
		if ($this->post('id')) {
			$post->load('id = ?', $this->post('id'));
		}
		
		$post->title = $this->post('title');
		$post->content = $this->post('content');
		$post->post_date = date('YYYY-MM-DD H:i:s');
		$post->replace();
		
		$this->redirect('/dashboard/posts');
	}
	
	public function edit($id) {
		Loader::model('blog_post');
		$post = new BlogPost();
		$post->load('id = ?', $id);
		$this->set($post, (array) $post);
	}
	
}