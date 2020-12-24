<?php 
defined('C5_EXECUTE') or die("Access Denied.");

class DashboardPostsAddController extends Controller {

	public function save() {
		Loader::model('blog_post');
		$post = new BlogPost();
		
		$post->title = $this->post('title');
		$post->content = $this->post('content');
		$post->post_date = date('YYYY-MM-DD H:i:s');
		$post->save();
		
		$this->redirect('/dashboard/posts');
	}
	
}