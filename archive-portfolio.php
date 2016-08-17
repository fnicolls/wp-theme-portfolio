<?php get_header(); ?>
<div class="wrapper">
<main id="content">

	
<section class="port-box cf">
	<h2 class="port-work-title">WEB DESIGN</h2>
	<div class="flex-cont-port"> 
	 <?php
			$args=array(
			  'work' => 'web-design',
			  'post_type' => 'portfolio',
			  'post_status' => 'publish',
			  'posts_per_page' => 4,
			);
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); ?>
			
			  	<article id="port-<?php the_id(); ?>" <?php post_class(); ?>>
			  		<a href="<?php the_permalink() ?>">
						<div class="port-thumb">
						<?php the_post_thumbnail('port-thumbs'); ?>
						</div>
						<div class="overlay"></div>
					</a>

				</article>
				
			    <?php
			  endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>
	</div> <!-- flex-container 1-->
	<a href="<?php echo get_term_link( 'web-design', 'work'); ?>">
	<div class="view-all cf">VIEW ALL</div>
	</a>
</section>

<section class="port-box cf">
	<h2 class="port-work-title">GRAPHIC DESIGN</h2>
	<div class="flex-cont-port"> 
		<?php
			$args=array(
			  'work' => 'graphic-design',
			  'post_type' => 'portfolio',
			  'post_status' => 'publish',
			  'posts_per_page' => 4,
			);
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); ?>
			  	
			  	<article id="port-<?php the_id(); ?>" <?php post_class(); ?>>
			  		<a href="<?php the_permalink() ?>">
						<div class="port-thumb">
						<?php the_post_thumbnail('port-thumbs'); ?>
						</div>
						<div class="overlay"></div>
					</a>
				</article>

			    <?php
			  endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>
	</div> <!-- flex-container 2-->
	<a href="<?php echo get_term_link( 'graphic-design', 'work'); ?>">
	<div class="view-all cf">VIEW ALL</div>
	</a>
</section>	


<section class="port-box cf">
	<h2 class="port-work-title">ILLUSTRATION</h2>
	<div class="flex-cont-port"> 
		<?php
			$args=array(
			  'work' => 'illustration',
			  'post_type' => 'portfolio',
			  'post_status' => 'publish',
			  'posts_per_page' => 4,
			);
			$my_query = new WP_Query($args);
			if( $my_query->have_posts() ) {
			  while ($my_query->have_posts()) : $my_query->the_post(); ?>
			  	
			  	<article id="port-<?php the_id(); ?>" <?php post_class(); ?>>
			  		<a href="<?php the_permalink() ?>">
						<div class="port-thumb">
						<?php the_post_thumbnail('port-thumbs'); ?>
						</div>
						<div class="overlay"></div>
					</a>
				</article>

			    <?php
			  endwhile;
			}
			wp_reset_query();  // Restore global post data stomped by the_post().
		?>
	</div> <!-- flex-container 3-->
	<a href="<?php echo get_term_link( 'illustration', 'work'); ?>">
	<div class="view-all cf">VIEW ALL</div>
	</a>
</section>

</main>


</div> <!-- wrapper -->

<?php get_footer(); ?>