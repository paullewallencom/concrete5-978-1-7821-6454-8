<form>
	<?php 
		$pageSelector = Loader::helper('form/page_selector');
		echo $pageSelector->selectPage('page_id');
	?>
</form>