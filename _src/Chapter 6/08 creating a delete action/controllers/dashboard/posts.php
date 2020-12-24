<?php 
defined('C5_EXECUTE') or die("Access Denied.");

class DashboardPostsController extends Controller {

	public function view() {
		Loader::model('blog_post');
		$post = new BlogPost();
		$posts = $post->find('1=1');
		$this->set('posts', $posts);
	}
	
	public function delete($id) {
		Loader::model('blog_post');
		$post = new BlogPost();
		$post->load('id = ?', $id);
		$post->delete();
		
		$this->redirect('/dashboard/posts');
	}

}