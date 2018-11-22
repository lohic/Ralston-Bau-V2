<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title ><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

	<link rel="stylesheet" href="https://use.typekit.net/vrl2tmu.css">


	<?= css("assets/css/style.css") ?>
	<?= js("assets/js/jquery-3.2.1.min.js") ?>
</head>
<body>


<?php if($site->maintenance()->isTrue() and $page->uid() != 'maintenance') { go('maintenance');} ?>

<?php if($page->uid() != 'maintenance') { ?>
<?php // snippet('menu') ?>
<?php } ?>