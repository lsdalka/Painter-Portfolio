<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Angelos Mavraidis</title>	

	
	<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
	
	<?php if ( is_home() ) { ?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<?php } else { ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/artwork.css" type="text/css" media="all" />
	<?php } ?>

	
	<!--[if IE 8]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie8.css" type="text/css" media="all" />
	<![endif]-->	
	<!--[if lte IE 7]>
	<script src='http://test.angelosmavraidis.com/wp-content/plugins/photoswipe-masonry/masonry.pkgd.min.js?ver=4.8.1'></script>
	<script></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie5-7.css" type="text/css" media="all" />
	<![endif]-->
	
	
	<?php wp_head(); ?>
</head>
<body>

<div id="wrapper">

<header id="header">
	
	<div id="name">	
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Angelos Mavraidis</a>
	</div>

	<div class="menu">
		<?php wp_nav_menu( array('menu' => 'menu_artwork' )); ?>
	</div>	

</header><!-- .header -->