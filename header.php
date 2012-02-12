<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Pears <?php wp_title('/', true, 'left'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet/less" href="<?php bloginfo('template_directory'); ?>/styles/screen.less">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.png"> 
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="<?php bloginfo('template_directory'); ?>/js/less.js"></script>
	<?php wp_head(); ?>
</head>

<body>

	<header role="banner">
		<a href="<?php echo home_url(); ?>" id="logo">Pears <em>are common patterns of markup &amp; style</em></a>
	</header>

	<div class="wrap">
		<div class="main" role="main">