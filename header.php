<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href="https://fonts.googleapis.com/css?family=Questrial|Raleway" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header-int"></div>

	

<div id="container">
	<header id="header">
		<?php wp_nav_menu( array(
				'theme_location' => 'main_menu',
				'container' 	 => 'nav',
				'container_class'=> 'menu',
				'menu_class' 	 => '',
				'fallback_cb' 	 => '',
		)); ?>
	</header>