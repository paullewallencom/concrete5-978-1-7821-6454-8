<div class="ccm-ui">
	<div class="ccm-pane">
		<?php
			$dashboard = Loader::helper('concrete/dashboard');
			echo $dashboard->getDashboardPaneHeader('Blog Posts');
		?>
		<div class="ccm-pane-body ccm-pane-footer">
			<table class="table table-striped table-bordered">
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Post Date</th>
					<th>Actions</th>
				</tr>
				<?php foreach ($posts as $post): ?>
					<tr>
						<td><?php echo $post->id ?></td>
						<td><?php echo $post->title ?></td>
						<td><?php echo date('F j, Y g:i a', strtotime($post->post_date)) ?></td>
						<td>
							<a href="<?php echo $this->url('/dashboard/posts/add/edit/', $post->id) ?>" class="btn">Edit</a>
							<a href="<?php echo $this->action('/dashboard/posts/delete/', $post->id) ?>" class="btn danger">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>