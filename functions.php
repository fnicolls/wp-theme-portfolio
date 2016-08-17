<?php 

add_theme_support('post-formats', array('image', 'gallery', 'audio', 'video', 'aside', 'status', 'link') );
add_theme_support('post-thumbnails');

			//    name   width  height crop?
add_image_size( 'banner', 1200, 300, true );
add_image_size( 'blog-card', 350, 275, true );
add_image_size( 'skinny-banner', 1200, 150, true );
add_image_size( 'pag-thumbnail', 200, 100, true );
add_image_size( 'port-thumbs', 300, 300, true );

add_theme_support('custom-background', apply_filters('fern_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => get_stylesheet_directory_uri() . "/imgs/headerimg.jpg",
    )));

add_theme_support( 'custom-header', array(
					'width'  => 1200,
					'height' => 700,
					'flex-height'=> true,
					) );


add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );

add_theme_support( 'title-tag' );

add_theme_support( 'automatic_feed_links' );


/**
 * excerpt length
 */
function fern_ex_length(){
	return 20;
}
add_filter( 'excerpt_length', 'fern_ex_length' );


/**
* improve comment UX with js
*/
function fern_comm_reply(){
	if( is_single() AND comments_open() ){
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fern_comm_reply' );

/**
 * add menu areas
 */
function fern_menu_areas(){
	register_nav_menus( array(
 		'main_menu' => 'Main Nav Area',
 		'home_menu' => 'Home Nav Area',
 		'footer_menu' => 'Footer Nav Area',
		) );
}
add_action( 'init', 'fern_menu_areas' );

/**
 * regular pagination for blog posts
 */
function fern_pagination(){
	if( is_singular('post') ){
		echo '<div class="pn-page">';
		previous_post_link( '%link', '&laquo; %title' );
		next_post_link( '%link', '%title &raquo;' );
		echo '</div>';
	}else{
		echo '<div class="pag-num">';
		if( function_exists('the_posts_pagination') ){
			the_posts_pagination( array(
				'next_text' => 'Next &rarr;',
				'prev_text' => '&larr;',
				'mid_size' 	=> 5,
				'screen_reader_text' => 'more',
				));
		}else{
			previous_posts_link( '&larr; Newer Posts' );
			next_posts_link( 'Older Posts &rarr;' );
		}
		echo '</div>';
	}
}

/**
 * pagination for blog posts with thumbnails
 */
function fern_pagination_thumbs(){
	echo '<div class="pag-thumbs">';
	if( is_singular('post') ){
		//fancy pagination with post thumbnails
		$next_post = get_next_post();
		$prev_post = get_previous_post();
	?>
		<h3>More posts:</h3>

		<?php if($prev_post){ ?>
			<div class="pag-thumb-prev">
			<a href="<?php echo get_permalink( $prev_post ); ?>">
				<?php echo get_the_post_thumbnail( $prev_post, 'pag-thumbnail' ); ?>
				<h4><?php echo $prev_post->post_title; ?></h4>
			</a>
			</div>
		<?php } //end if prev post exists 
		if($next_post){
			?>
			<div class="pag-thumb-next">		
			<a href="<?php echo get_permalink( $next_post ); ?>">
				<?php echo get_the_post_thumbnail( $next_post, 'pag-thumbnail' ); ?>
				<h4><?php echo $next_post->post_title; ?></h4>
			</a>
			</div>
			<?php
		} //end if next post
	}
}

/**
 * widget areas
 * dynamic_sidebar()
 */
function fern_widget_areas(){
	register_sidebar( array(
 		'name' 	=> 'Blog Sidebar',
 		'id' 	=> 'blog-sidebar',
 		'description' => 'sidebar for widgets',
 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
 		'after_widget' 	=> '</section>',
 		'before_title' 	=> '<h3 class="widget-title">',
 		'after_title' 	=> '</h3>'
		) );
	register_sidebar( array(
 		'name' 	=> 'Home Area',
 		'id' 	=> 'home-area',
 		'description' => 'sidebar for widgets',
 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
 		'after_widget' 	=> '</section>',
 		'before_title' 	=> '<h3 class="widget-title">',
 		'after_title' 	=> '</h3>'
		) );
	register_sidebar( array(
 		'name' 	=> 'Footer Area',
 		'id' 	=> 'footer-area',
 		'description' => 'sidebar for widgets',
 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
 		'after_widget' 	=> '</section>',
 		'before_title' 	=> '<h3 class="widget-title">',
 		'after_title' 	=> '</h3>'
		) );
	register_sidebar( array(
 		'name' 	=> 'Contact Footer Area',
 		'id' 	=> 'contact-footer-area',
 		'description' => 'sidebar for widgets',
 		'before_widget' => '<section id="%1$s" class="widget %2$s">',
 		'after_widget' 	=> '</section>',
 		'before_title' 	=> '<h3 class="widget-title">',
 		'after_title' 	=> '</h3>'
		) );
}
add_action( 'widgets_init', 'fern_widget_areas' );

function fern_scripts(){
	wp_enqueue_script( 'jquery' );
	$js = get_stylesheet_directory_uri() . '/js/fern.js';
	wp_enqueue_script( 'fern-js', $js, array('jquery') );
}
add_action( 'wp_enqueue_scripts', 'fern_scripts' );


