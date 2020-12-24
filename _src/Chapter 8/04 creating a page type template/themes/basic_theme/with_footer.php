<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php Loader::element('header_required') ?>
</head>
<body>
	<?php $a = new Area('content'); $a->display($c); ?>
	<footer>
		&copy; <?php echo date('Y') ?> Somebody
	</footer>
	<?php Loader::element('footer_required') ?>
</body>
</html>