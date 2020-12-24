<?php $this->inc('elements/header.php'); ?>
	<?php $a = new Area('content'); $a->display($c); ?>
	<footer>
		&copy; <?php echo date('Y') ?> Somebody
	</footer>
<?php $this->inc('elements/footer.php'); ?>