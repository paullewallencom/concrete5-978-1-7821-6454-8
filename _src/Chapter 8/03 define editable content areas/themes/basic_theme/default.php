<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php Loader::element('header_required') ?>
</head>
<body>
    <?php $a = new Area('content'); $a->display($c); ?>
    <?php Loader::element('footer_required') ?>
</body>
</html>