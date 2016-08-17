<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="parallax"></div>

	

<div id="container">
	<header id="header">
		<?php wp_nav_menu( array(
				'theme_location' => 'home_menu',
				'container' 	 => 'nav',
				'container_class'=> 'menu',
				'menu_class' 	 => '',
				'fallback_cb' 	 => '',
		)); ?>
	</header>