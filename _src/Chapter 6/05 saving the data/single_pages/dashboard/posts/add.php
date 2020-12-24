<?php $form = Loader::helper('form') ?>
<style type="text/css" media="screen">
	.form-label {
		width: 150px;
	}
</style>
<div class="ccm-ui">
	<form action="<?php echo $this->action('save') ?>" method="POST">
		<div class="ccm-pane">
			<?php
				$dashboard = Loader::helper('concrete/dashboard');
				echo $dashboard->getDashboardPaneHeader('New Post');
			?>
			<div class="ccm-pane-body">
				<table class="zebra-striped">
					<thead>
						<tr><th colspan="2">Post Information</th></tr>
					</thead>
					<tbody>
						<tr>
							<td class="form-label">
								Title
							</td>
							<td>
								<?php echo $form->text('title') ?>
							</td>
							<td class="form-label">
								Post Content
							</td>
							<td>
								<?php echo $form->textarea('content') ?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="ccm-pane-footer" style="text-align: right;">
				<input class="btn btn-primary" type="submit" value="Save">
				<a href="<?php echo $this->url('/dashboard/posts') ?>" class="btn">Cancel</a>
			</div>
		</form>
	</div>
</div>