<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/style.css">
<script type="text/javascript" src="js/main.js"></script>

</head>
<body>

	<div class="hero-image">
		<div class="hero-text">
			<h1><?= $header['title'] ?></h1>
			<h2><?= $header['motto'] ?></h2>
		</div>
	</div>

	
	<div class="nav">
		<?php foreach ($pages as $url => $page) { ?>
			<a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
			<?= $page['text'] ?></a>
			
		<?php } ?>
		
    </div>
	<hr>
	<div id="content">
            <?php include("./templates/pages/{$find['file']}.tpl.php"); ?>
    </div>
	
	<footer>
        <p2><?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
		&nbsp;
		<?php if(isset($footer['original'])) { ?><?= $footer['original']; ?><?php } ?><a href="<?= $footer['oceana'] ?>">
        <?php if(isset($footer['oceana'])) { ?><?= $footer['oceana']; ?><?php } ?></p2>
		
		
    </footer>
